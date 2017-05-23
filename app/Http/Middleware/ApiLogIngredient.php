<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

use Hash;

use App\User;
use App\UserApp;
use App\ApiLog;

class ApiLogIngredient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $apiKey = $request->header('api-key');
      // $key = $request->only('api-key');
      // $apiKey = $key['api-key'];

      $app = UserApp::where([
        ['token', '=', $apiKey],
        ['deleted_at', '=', null],
        ])->first();

      if($app == null) {
        // $result = [
        //   'status' => 'false',
        //   'info' => 'Incorrect API Key',
        // ];
        $result = [
          'status' => 'false',
          'info' => $apiKey,
        ];
        return response()->json($result);
      } else if($app->status == 0) {
        $result = [
          'status' => 'false',
          'info' => 'Application status in development',
        ];
        return response()->json($result);
      } else if(Hash::check($apiKey, $app->token_secret)) {

        $app->apiLog->ingredient = $app->apiLog->ingredient + 1;
        $app->apiLog->save();

        return $next($request);

      } else {
        $result = [
          'status' => 'false',
          'info' => 'Unknown error, please contact Administrator',
        ];
        return response()->json($result);
      }
    }
}
