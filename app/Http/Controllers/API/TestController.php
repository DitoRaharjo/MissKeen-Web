<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input as Input;

class TestController extends Controller
{
    public function urlQuery(Request $request) {
      $header = $request->header();
      $input = $request->all();

      return response()->json(["header" => $header, "input" => $input]);
    }

    public function postTest(Request $request) {
      $header = $request->header();
      $input = $request->all();

      return response()->json(["header" => $header, "input" => $input]);
    }

    public function putTest(Request $request) {
      $header = $request->header();
      $input = $request->all();

      return response()->json(["header" => $header, "input" => $input]);
    }

    public function patchTest(Request $request) {
      $header = $request->header();
      $input = $request->all();

      return response()->json(["header" => $header, "input" => $input]);
    }

    public function deleteTest(Request $request) {
      $header = $request->header();
      $input = $request->all();

      return response()->json(["header" => $header, "input" => $input]);
    }
}
