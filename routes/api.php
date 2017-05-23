<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//------------------------------------------------ API-KEY ------------------------------------------------ \\
// //For Testing API
// Route::group(['prefix'=>env('API_VERSION'), 'middleware'=>['ApiLogTest','checkApiKey']], function() {
//   Route::get('test', 'API\TestController@urlQuery')->name('api.urlQuery');
//   Route::post('test', 'API\TestController@postTest')->name('api.post');
//   Route::put('test', 'API\TestController@putTest')->name('api.put');
//   Route::patch('test', 'API\TestController@patchTest')->name('api.patch');
//   Route::delete('test', 'API\TestController@deleteTest')->name('api.delete');
// });
//
// //User Authentication and Registration
// Route::group(['prefix'=>env('API_VERSION'), 'middleware'=>['ApiLogUser','checkApiKey']], function() {
//   Route::post('user/auth', 'API\AuthController@auth')->name('user.auth');
//   Route::post('user/register', 'API\AuthController@register')->name('user.register');
// });
//
// //Recipe Management
// Route::group(['prefix'=>env('API_VERSION'), 'middleware'=>['ApiLogRecipe','checkApiKey']], function() {
//   Route::get('recipe', 'API\RecipeController@getAll')->name('recipe.getAll');
//   Route::get('recipe/{id}', 'API\RecipeController@getOne')->name('recipe.getOne');
//   Route::post('recipe', 'API\RecipeController@store')->name('recipe.store');
//   Route::patch('recipe', 'API\RecipeController@update')->name('recipe.update');
//   Route::delete('recipe', 'API\RecipeController@delete')->name('recipe.delete');
// });
//
// //Ingredient Management
// Route::group(['prefix'=>env('API_VERSION'), 'middleware'=>['ApiLogIngredient','checkApiKey']], function() {
//   Route::get('ingredient', 'API\IngredientController@getAll')->name('ingredient.getAll');
//   Route::get('ingredient/{id}', 'API\IngredientController@getOne')->name('ingredient.getOne');
//   Route::post('ingredient', 'API\IngredientController@store')->name('recipe.store');
//   Route::patch('ingredient', 'API\IngredientController@update')->name('ingredient.update');
//   Route::delete('ingredient', 'API\IngredientController@delete')->name('ingredient.delete');
// });
//------------------------------------------------ API-KEY ------------------------------------------------ \\

//------------------------------------------------ WITHOUT API-KEY ------------------------------------------------ \\
//For Testing API
Route::group(['prefix'=>env('API_VERSION')], function() {
  Route::get('test', 'API\TestController@urlQuery')->name('api.urlQuery');
  Route::post('test', 'API\TestController@postTest')->name('api.post');
  Route::put('test', 'API\TestController@putTest')->name('api.put');
  Route::patch('test', 'API\TestController@patchTest')->name('api.patch');
  Route::delete('test', 'API\TestController@deleteTest')->name('api.delete');
});

//User Authentication and Registration
Route::group(['prefix'=>env('API_VERSION')], function() {
  Route::post('user/auth', 'API\AuthController@auth')->name('user.auth');
  Route::post('user/register', 'API\AuthController@register')->name('user.register');
});

//Recipe Management
Route::group(['prefix'=>env('API_VERSION')], function() {
  Route::get('recipe', 'API\RecipeController@getAll')->name('recipe.getAll');
  Route::get('recipe/{id}', 'API\RecipeController@getOne')->name('recipe.getOne');
  Route::post('recipe', 'API\RecipeController@store')->name('recipe.store');
  Route::patch('recipe', 'API\RecipeController@update')->name('recipe.update');
  Route::delete('recipe', 'API\RecipeController@delete')->name('recipe.delete');
});

//Ingredient Management
Route::group(['prefix'=>env('API_VERSION')], function() {
  Route::get('ingredient', 'API\IngredientController@getAll')->name('ingredient.getAll');
  Route::get('ingredient/{id}', 'API\IngredientController@getOne')->name('ingredient.getOne');
  Route::post('ingredient', 'API\IngredientController@store')->name('recipe.store');
  Route::patch('ingredient', 'API\IngredientController@update')->name('ingredient.update');
  Route::delete('ingredient', 'API\IngredientController@delete')->name('ingredient.delete');
});
//------------------------------------------------ WITHOUT API-KEY ------------------------------------------------ \\
