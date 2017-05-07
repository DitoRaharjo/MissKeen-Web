<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

use App\Recipe;
use App\Ingredient;

class SearchController extends Controller
{
    public function search(Request $request) {
      $input_data = $request->only('ingredient_id');

      
    }


}
