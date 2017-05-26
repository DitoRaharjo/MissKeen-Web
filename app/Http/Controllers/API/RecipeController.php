<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Carbon\Carbon;

use GuzzleHttp\Client;

use App\Recipe;
use App\Ingredient;
use App\IngredientData;

class RecipeController extends Controller
{
    public function getCalory() {
      $recipes = Recipe::all();

      $totalCaloryApi = 0;

      foreach ($recipes as $recipe) {
        $ingredients = $recipe->ingredients->pluck('id');
        foreach ($ingredients as $ingredient) {
          $client = new Client();
          $response = $client->get(
              'http://ditoraharjo.co/misskeengizi/api/v1/gizi/'.$ingredient
          )->getBody();
          $response = json_decode($response);

          foreach ($response as $value) {
            $totalCaloryApi = $totalCaloryApi + $value->calory_amount;
          }

        }
        $recipe->totalCalory = $totalCaloryApi;
        $recipe->save();
        $totalCaloryApi = 0;
      }
    }

    public function getPrice() {
      $recipes = Recipe::all();

      $totalPriceApi = 0;

      foreach ($recipes as $recipe) {
        $ingredients = $recipe->ingredients->pluck('id');
        foreach ($ingredients as $ingredient) {
          $ingredientAmount = IngredientData::where([
            ['ingredient_id', $ingredient],
            ['recipe_id', $recipe->id]
          ])->pluck('amount')->first();

          $client = new Client();
          $response = $client->get(
              'http://ditoraharjo.co/misskeenharga/api/v1/harga/'.$ingredient
          )->getBody();
          $response = json_decode($response);

          foreach ($response as $value) {
            $totalPriceApi = $totalPriceApi + ($value->harga * $ingredientAmount);
          }

        }
        $recipe->totalPrice = $totalPriceApi;
        $recipe->save();
        $totalPriceApi = 0;
      }
    }

    public function getAll(Request $request) {
      // $this->validate($request, [
      //     'user_id',
      // ]);

      $this->getCalory();
      $this->getPrice();

      $input_data = $request->only(
        'user_id'
      );

      if($input_data['user_id'] == null) {
        unset($input_data);
        $recipes = Recipe::with(['ingredients.ingredientData'])->where('deleted_at', null)->get();
      } else {
        $recipes = Recipe::with(['ingredients.ingredientData'])->where([
          ['deleted_at', null],
          ['created_by', '=', $input_data['user_id']],
          ])->get();
      }

      if($recipes->count() == 0) {
        $result = [
          'status' => 'false',
          'info' => 'No Data Found',
          'method' => 'GET ALL'
        ];
        return response()->json($result, 404);
      } else {
        return response()->json($recipes);
      }
    }

    public function getOne($id) {
      $this->getCalory();
      $this->getPrice();

      $recipe = Recipe::with(['ingredients.ingredientData'])->where([
        ['id', '=', $id]
        ])->get();

      if($recipe->count() == 0) {
        $result = [
          'status' => 'false',
          'info' => 'No Data Found',
          'method' => 'GET ONE'
        ];
        return response()->json($result, 404);
      } else {
        return response()->json($recipe);
      }
    }


    public function store(Request $request) {
      // $this->validate($request, [
      //     'name' => 'required',
      //     'description' => 'required',
      //     'procedure' => 'required',
      //     'portion' => 'required',
      //     'image' => 'required',
      //     'created_by' => 'required',
      //     'ingredients' => 'required',
      // ]);

      $input_data = $request->only(
        'name',
        'description',
        'procedure',
        'portion',
        'image',
        'created_by',
        'ingredients'
      );

      $ingredients = $input_data['ingredients'];

      unset($input_data['ingredients']);

      $recipe_data = $input_data;

      // return response()->json($input_data);

      DB::beginTransaction();
      try
      {
        $recipeNew = Recipe::create($recipe_data);

        $ingredients_id = array();

        foreach ($ingredients as $ingredient) {
          $ingredient['recipe_id'] = $recipeNew->id;
          IngredientData::create($ingredient);

          $ingredients_id[] = $ingredient['ingredient_id'];
        }

        $recipeNew->ingredients()->attach($ingredients_id);

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
      //     'description' => 'required',
      //     'procedure' => 'required',
      //     'portion' => 'required',
      //     'image' => 'required',
      //     'updated_by' => 'required',
      //     'ingredients' => 'required',
      // ]);

      $input_data = $request->only(
        'id',
        'name',
        'description',
        'procedure',
        'portion',
        'image',
        'updated_by',
        'ingredients'
      );

      $recipe = Recipe::find($input_data['id']);

      unset($input_data['id']);

      $ingredients = $input_data['ingredients'];

      unset($input_data['ingredients']);

      $recipe_data = $input_data;

      // return response()->json($input_data);

      DB::beginTransaction();
      try
      {
        $recipe->update($recipe_data);

        if($ingredients != null ) {
          $ingredientData = $recipe->ingredientData;

          foreach ($ingredientData as $value) {
            foreach ($ingredients as $ingredient) {
              if(($value->ingredient_id == $ingredient['ingredient_id'])) {
                $value->update($ingredient);
              }
            }
          }
        }

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

      $recipe = Recipe::find($input_data['id']);

      DB::beginTransaction();
      try
      {
        $recipe->deleted_at = Carbon::now();
        $recipe->deleted_by = $input_data['deleted_by'];
        $recipe->save();

        $ingredientData = $recipe->ingredientData;

        foreach ($ingredientData as $value) {
          $value->deleted_at = Carbon::now();
          $value->deleted_by = $input_data['deleted_by'];
          $value->save();
        }

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
