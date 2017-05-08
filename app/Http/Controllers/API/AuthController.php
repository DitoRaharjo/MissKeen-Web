<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use App\User;

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
            'user status' => '0',
            'info' => 'user status inactive',
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
          }
        }
      }
    }
}
