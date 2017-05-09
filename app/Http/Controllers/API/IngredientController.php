<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Carbon\Carbon;

use App\Ingredient;

class IngredientController extends Controller
{
    public function getAll() {
      $ingredients = Ingredient::all();

      return response()->json($ingredients);
    }

    public function getOne($id) {
      $ingredient = Ingredient::find($id);

      return response()->json($ingredient);
    }

    public function store(Request $request) {
      // $this->validate($request, [
      //     'name' => 'required',
      //     'created_by' => 'required',
      // ]);

      $input_data = $request->only(
        'name',
        'created_by'
      );

      DB::beginTransaction();
      try
      {
        Ingredient::create($input_data);

        DB::commit();

        $result = [
          'status' => 'true',
          'method' => 'CREATE'
        ];
        return response()->json($result, 201);
      } catch (\Exception $ex) {
        DB::rollback();
        $result = [
          'status' => 'false',
          'info' => $ex
        ];
        return response()->json($result, 500);
      }
    }

    public function update(Request $request) {
      // $this->validate($request, [
      //     'id' => 'required',
      //     'name' => 'required',
      //     'updated_by' => 'required',
      // ]);

      $input_data = $request->only(
        'id',
        'name',
        'updated_by'
      );


      DB::beginTransaction();
      try
      {
        $ingredient = Ingredient::find($input_data['id']);
        unset($input_data['id']);

        $ingredient->update($input_data);

        DB::commit();

        $result = [
          'status' => 'true',
          'method' => 'UPDATE'
        ];
        return response()->json($result, 200);
      } catch (\Exception $ex) {
        DB::rollback();
        $result = [
          'status' => 'false',
          'info' => $ex
        ];
        return response()->json($result, 500);
      }
    }

    public function delete(Request $request) {
      // $this->validate($request, [
      //       'id' => 'required',
      //       'deleted_by' => 'required',
      // ]);

      $input_data = $request->only(
        'id',
        'deleted_by'
      );

      $ingredient = Ingredient::find($input_data['id']);

      DB::beginTransaction();
      try
      {
        $ingredient->deleted_at = Carbon::now();
        $ingredient->deleted_by = $input_data['deleted_by'];
        $ingredient->save();

        DB::commit();

        $result = [
          'status' => 'true',
          'method' => 'DELETE'
        ];
        return response()->json($result, 200);
      } catch (\Exception $ex) {
        DB::rollback();
        $result = [
          'status' => 'false',
          'info' => $ex
        ];
        return response()->json($result, 500);
      }
    }
}
