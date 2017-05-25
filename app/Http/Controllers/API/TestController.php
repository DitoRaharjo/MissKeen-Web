<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input as Input;

// use App\Http\Controllers\API\Guzzle as Guzzle;
// use GuzzleHttp\Psr7\Response;
// use Psr\Http\Message\RequestInterface;
// use Psr\Http\Message\ResponseInterface;
// use GuzzleHttp\Client;

class TestController extends Controller
{
    public function urlQuery(Request $request) {
      //   $opts = array(
      //   'http'=>array(
      //     'method'=>"GET",
      //     'header' => "Content-Type:application/json"
      //   )
      // );
      // $context = stream_context_create($opts);
      //
      // $website = "http://ditoraharjo.co/misskeengizi/api/v1/gizi";
      // $response = file_get_contents($website, false, $context);

      // $response = json_encode($response);

      // $client = new Client();
      // $response = $client->send($response);
      // $response = $request->send();
      // $body = $response->getBody();
      // $path = $request->path();
      // $method = $request->method();
      // $header = $request->header();
      // $input = $request->all();
      //
      // return response()->json(["path" => $path, "method" => $method, "header" => $header, "input" => $input]);

      // $response = \Guzzle::get('http://ditoraharjo.co/misskeengizi/api/v1/gizi');

      $client = new \GuzzleHttp\Client();
      $response = $client->request('GET', 'http://ditoraharjo.co/misskeengizi/api/v1/gizi');

      $response = $response->getBody();

      return response($response);

      // return response()->json($count);
      // echo json_encode($response->getBody());
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
