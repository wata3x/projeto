<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin'], function ()
{
   Route::get('/categorias', 'CategoriaController@index');
   Route::post('/categorias', 'CategoriaController@store');
   Route::get('/categorias/create', 'CategoriaController@create');
   Route::get('/categorias/{id}/show', 'CategoriaController@show');
   Route::get('/categorias/{id}/edit', 'CategoriaController@edit');
   Route::patch('/categorias/{id}', 'CategoriaController@update');
   Route::delete('/categorias/{id}', 'CategoriaController@destroy');

    Route::get('/exercicios', 'ExercicioController@index');
    Route::post('/exercicios', 'ExercicioController@store');
    Route::get('/exercicios/create', 'ExercicioController@create');
    Route::get('/exercicios/{id}/show', 'ExercicioController@show');
    Route::get('/exercicios/{id}/edit', 'ExercicioController@edit');
    Route::patch('/exercicios/{id}', 'ExercicioController@update');
    Route::delete('/exercicios/{id}', 'ExercicioController@destroy');

    Route::get('/treinos', 'TreinoController@index');
    Route::get('/treinos/create', 'TreinoController@create');
    Route::post('/treinos', 'TreinoController@store');
    Route::get('/treinos/{id}/show', 'TreinoController@show');
    Route::get('/treinos/{id}/edit', 'TreinoController@edit');
    Route::patch('/treinos/{id}', 'TreinoController@update');
    Route::delete('/treinos/{id}', 'TreinoController@destroy');

    Route::get('/usuarios', 'UsuarioController@index');
    Route::post('/usuarios', 'UsuarioController@store');
    Route::get('/usuarios/create', 'UsuarioController@create');
    Route::get('/usuarios/{id}/show', 'UsuarioController@show');
    Route::delete('/usuarios/{id}', 'UsuarioController@destroy');


    Route::get('/avaliacoes', 'AvaliacaoController@index');
    Route::post('/avaliacoes', 'AvaliacaoController@store');
    Route::get('/avaliacoes/create', 'AvaliacaoController@create');
    Route::get('/avaliacoes/{id}/show', 'AvaliacaoController@show');


});