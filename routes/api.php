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
Route::group(['middleware' => 'cors'], function ()
{
    Route::group(['middleware' => 'jwt.auth'], function ()
    {
        Route::get('treinos', 'Api\TreinoController@index');
        Route::get('treinos/{id}', 'Api\TreinoController@show');

        Route::get('exercicios', 'Api\ExercicioController@index');
        Route::get('exercicios/{id}', 'Api\ExercicioController@show');

        Route::get('dietas', 'Api\DietaController@index');
        Route::get('dietas/{id}', 'Api\DietaController@show');

        Route::get('avaliacoes', 'Api\AvaliacaoController@index');
        Route::get('avaliacoes/{id}', 'Api\AvaliacaoController@show');
    });

   Route::post('login', 'Api\AuthController@login');
});



