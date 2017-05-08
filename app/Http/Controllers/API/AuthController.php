<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Role;

class AuthController extends Controller
{
    public function auth(Request $request) {
      $this->validate($request, [
          'email' => 'required',
          'password' => 'required',
      ]);

      $input_data = $request->only(
        'email',
        'password'
      );

      $checkEmail = User::where('email', '=', $input_data['email'])->first();

      if($checkEmail == null) {
        $result = [
          'status' => 'false',
          'info' => 'user not found',
        ];
        return response()->json($result, 404);
      } else {
        if($checkEmail->status == 0) {
          $result = [
            'status' => 'false',
            'info' => 'user status inactive, please contact admin for further information',
          ];
          return response()->json($result);
        } else {
          if(Hash::check($input_data['password'], $checkEmail->password)) {
            unset($checkEmail->role_id);
            unset($checkEmail->lupa_pass);
            unset($checkEmail->status);
            unset($checkEmail->registerdate);
            unset($checkEmail->created_at);
            unset($checkEmail->updated_at);
            unset($checkEmail->deleted_at);
            unset($checkEmail->created_by);
            unset($checkEmail->updated_by);
            unset($checkEmail->deleted_by);
            $result = [
              'status' => 'true',
              'user' => $checkEmail
            ];
            return response()->json($result);
          } else {
            $result = [
              'status' => 'false',
              'info' => 'incorrect email and password combination'
            ];
            return response()->json($result);
          }
        }
      }
    }

    public function register(Request $request) {
      $this->validate($request, [
        'fullname' => 'required',
        'email' => 'required',
        'password' => 'required',
      ]);

      $input_data = $request->only(
        'fullname',
        'email',
        'password',
        'telp',
        'alamat',
        'image'
      );

      DB::beginTransaction();
      try
      {
        $roleId = Role::select('id')->where('name', 'LIKE', 'User')->first();
        $input_data['role_id'] = $roleId;
        $input_data['status'] = '1';
        $input_data['registerdate'] = Carbon::now();

        User::create($input_data);

        DB::commit();

        $result = [
          'status' => 'true',
          'method' => 'CREATE'
        ];
        return response()->json($result, 201);
      } catch (\QueryException $ex) {
        DB::rollback();
        $result = [
          'status' => 'false',
          'info' => $ex
        ];
        return response()->json($result, 500);
      }
    }
}
