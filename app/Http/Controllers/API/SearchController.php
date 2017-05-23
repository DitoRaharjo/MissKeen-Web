<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Carbon\Carbon;

use App\Recipe;
use App\Ingredient;
use App\IngredientData;

class SearchController extends Controller
{
    public function search(Request $request) {
      $input_data = $request->only(
        'ingredients'
      );

      $ingredients = $input_data['ingredients'];

      $recipes = Recipe::whereHas('ingredients.ingredientData', function($query) use($ingredients) {
        $query->whereIn('id', $ingredients);
      })->get();

      return response()->json($recipes);
      }
}
