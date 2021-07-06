<?php

use Illuminate\Support\Facades\Route;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->group(['prefix' => 'post', 'middleware' => 'cors'], function ($router) {
    $router->get('/', ['as' => 'post.index', 'uses' => 'PostController@index']);
    $router->post('/', ['as' => 'post.save', 'uses' => 'PostController@store']);
    $router->get('/{id}', ['as' => 'post.edit', 'uses' => 'PostController@show']);
    $router->patch('/{id}', ['as' => 'post.update', 'uses' => 'PostController@update']);
    $router->delete('/{id}', ['as' => 'post.delete', 'uses' => 'PostController@destroy']);
});

$router->group(['prefix' => 'dosen', 'middleware' => 'cors'], function ($router) {
    $router->get('/', ['as' => 'dosen.index', 'uses' => 'dosenController@index']);
    $router->get('/{nidn}', ['as' => 'dosen.search', 'uses' => 'dosenController@find']);
});

$router->group(['prefix' => 'mahasiswa', 'middleware' => 'cors'], function ($router) {
    $router->get('/', ['as' => 'mahasiswa.index', 'uses' => 'mahasiswaController@index']);
    $router->get('/detail/{nim}', ['as' => 'mahasiswa.search', 'uses' => 'mahasiswaController@find']);
});



// Route::apiResource('/posts', App\Http\Controllers\PostController::class);
