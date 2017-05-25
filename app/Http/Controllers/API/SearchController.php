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

class SearchController extends Controller
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

    public function search(Request $request) {
      $this->getCalory();
      $this->getPrice();

      $input_data = $request->only(
        'ingredients'
      );

      $ingredients = $input_data['ingredients'];

      $jumlah = 0;
      foreach ($ingredients as $hitung) {
        $jumlah++;
      }

      $data = array();

      $hasilSemua = Recipe::whereHas('ingredients', function ($query)  use ($ingredients) {
        $query->where('ingredients.id', $ingredients[0]);
      })->get();

      if($jumlah == 1) {
        $count = 0;
        foreach ($hasilSemua as $hasil) {
          $ingredientId = $hasil->ingredients->pluck('id');
          foreach ($ingredientId as $id) {
            foreach ($ingredients as $ingredient) {
              if($id == $ingredient) {
                $data[] = $hasil->id;
              }
            }
          }
          $count = 0;
        }
      } else if($jumlah > 1) {
        $count = 0;
        foreach ($hasilSemua as $hasil) {
          $ingredientId = $hasil->ingredients->pluck('id');
          foreach ($ingredientId as $id) {
            foreach ($ingredients as $ingredient) {
              if($id == $ingredient) {
                // $data[] = $hasil->id;
                $count++;
              }
              if($count > 1) {
                if(!in_array($hasil->id, $data)) {
                  $data[] = $hasil->id;
                }
              }
            }
          }
          $count = 0;
        }
      }

      $recipes = array();

      foreach ($data as $value) {
        $recipes[] = Recipe::find($value);
      }

      if($recipes == null) {
        $result = [
          'status' => 'false',
          'info' => 'there is no recipe with that ingredient yet',
        ];
        return response()->json($result);
      } else {
        return response()->json($recipes);
      }
    }
}
