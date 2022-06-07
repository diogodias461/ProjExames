<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('exames.index');
});


//show
Route::get('/exames',[\App\Http\Controllers\perguntaController::class,'perguntaController@index']);
Route::get('/exames/{Perguntas}',[\App\Http\Controllers\perguntaController::class,'show']);

//create
//Route::get('/exames',[\App\Http\Controllers\perguntaController::class,'create']);
//Route::get('/exames',[\App\Http\Controllers\perguntaController::class,'store']);


