<?php

use Illuminate\Http\Request;
Use \App\Team;
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


Route::get('/league/{lg}','TeamController@index');
Route::post('/league/{lg}','TeamController@add');
Route::get('/league/{lg}/show/{id}','TeamController@show');
Route::put('/league/{lg}/update/{id}','TeamController@update');
Route::delete('/league/{lg}/delete/{id}','TeamController@delete');

Route::get('/fixtures/{lg}','FixtureController@index');
Route::post('/fixtures/{lg}','FixtureController@add');
Route::get('/fixtures/{lg}/show/{id}','FixtureController@show');
Route::put('/fixtures/{lg}/update/{id}','FixtureController@update');
Route::delete('/fixtures/{lg}/delete/{id}','FixtureController@delete');

Route::get('/live/{lg}','ScoreController@index');
Route::post('/live/{lg}','ScoreController@add');
Route::get('/live/{lg}/show/{id}','ScoreController@show');
Route::put('/live/{lg}/update/{id}','ScoreController@update');
Route::delete('/live/{lg}/delete/{id}','ScoreController@delete');
