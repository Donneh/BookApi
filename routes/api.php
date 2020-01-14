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

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('authors', 'AuthorController@index');
    Route::get('authors/{author}', 'AuthorController@show');

    Route::get('publishers', 'PublisherController@index');
    Route::get('publishers/{publisher}', 'PublisherController@show');

    Route::get('books', 'BookController@index');
    Route::get('books/highlighted', 'BookController@highlighted');
    Route::get('books/{book}', 'BookController@show');
    Route::get('books/search/{query}/{offset?}/{limit?}', 'BookController@search');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
