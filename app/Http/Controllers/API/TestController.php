<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input as Input;

class TestController extends Controller
{
    public function urlQuery(Request $request) {
      $input = $request->all();

      $coba = $input;
      return response()->json($input, 500);
    }

    public function postTest(Request $request) {
      $dataTest = $request->except('_token');
      // $inputTest = Input::all();

      return response()->json($dataTest);
    }

    public function putTest(Request $request) {
      $data = $request->except('_token');

      return response()->json($data);
    }

    public function patchTest(Request $request) {
      $data = $request->except('_token');

      return response()->json($data);
    }

    public function deleteTest(Request $request) {
      $data = $request->except('_token');

      return response()->json($data);
    }
}
