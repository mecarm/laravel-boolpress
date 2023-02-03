<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Primo parametro di default viene aggiunto un prefisso che si chiama api
//Esempio : localhost:8000/api/posts
// Route::get('/posts', 'Api\PostController@index')

Route::
    namespace ('Api')->prefix('/posts')->group(function () {

        //Localhost:800/api/posts
        Route::get('/', 'PostController@index');

        //Localhost:800/api/posts/12 {12 è l'id dinamico}
        Route::get('/{id}', 'PostController@show');

    });



Route::
    namespace ('Api')->prefix('/tags')->group(function () {

        //Attivo la funzione indevo del controller tag
        Route::get('/', 'TagsController@index');

    });