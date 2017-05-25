<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input as Input;

// use GuzzleHttp\Client;

class TestController extends Controller
{
    public function urlQuery(Request $request) {
      $client = new \GuzzleHttp\Client();

      $response = $client->request("GET", "http://ditoraharjo.co/misskeengizi/api/v1/gizi");

      // $response = $client->send($response);
      // $response = $request->send();
      // $body = $response->getBody();
      // $path = $request->path();
      // $method = $request->method();
      // $header = $request->header();
      // $input = $request->all();
      //
      // return response()->json(["path" => $path, "method" => $method, "header" => $header, "input" => $input]);


      return response()->json($response->getBody());
      // echo json_encode($result);
    }

    public function postTest(Request $request) {
      $method = $request->method();
      $header = $request->header();
      $input = $request->all();

      return response()->json(["method" => $method, "header" => $header, "input" => $input]);
    }

    public function putTest(Request $request) {
      $method = $request->method();
      $header = $request->header();
      $input = $request->all();

      return response()->json(["method" => $method, "header" => $header, "input" => $input]);
    }

    public function patchTest(Request $request) {
      $method = $request->method();
      $header = $request->header();
      $input = $request->all();

      return response()->json(["method" => $method, "header" => $header, "input" => $input]);
    }

    public function deleteTest(Request $request) {
      $method = $request->method();
      $header = $request->header();
      $input = $request->all();

      return response()->json(["method" => $method, "header" => $header, "input" => $input]);
    }
}
