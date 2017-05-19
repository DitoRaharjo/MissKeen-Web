<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use Hash;

use App\User;
use App\UserApp;

class checkApiKey
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

      if($apiKey == null) {
        $result = [
          'status' => 'false',
          'info' => 'Missing API Key',
        ];
        return response()->json($result);
      } else {
        $app = UserApp::where([
          ['token', '=', $apiKey],
          ['deleted_at', '=', null],
          ])->first();

        if($app == null) {
          $result = [
            'status' => 'false',
            'info' => 'Incorrect API Key',
          ];
          return response()->json($result);
        } else if($app->status == 0) {
          $result = [
            'status' => 'false',
            'info' => 'Application status in development',
          ];
          return response()->json($result);
        } else if(Hash::check($apiKey, $app->token_secret)) {
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
}
