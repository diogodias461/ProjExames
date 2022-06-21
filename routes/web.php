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
    return view('welcome');
    //Route::get('/exames',[\App\Http\Controllers\perguntaController::class,'perguntaController@index']);

});


//showPergunta
Route::get('/exames',[\App\Http\Controllers\perguntaController::class,'perguntaController@index']);
Route::get('/exames/{Perguntas}',[\App\Http\Controllers\perguntaController::class,'show'])->name('exames.show');

//createPergunta
Route::get('/exames',[\App\Http\Controllers\perguntaController::class,'create'])->name('exames.create');
Route::post('/exames',[\App\Http\Controllers\perguntaController::class,'store']);

//showResposta
Route::get('/reposta',[\App\Http\Controllers\respostaController::class,'respostaController@index']);
Route::get('/resposta/{Respostas}',[\App\Http\Controllers\respostaController::class,'show'])->name('examesResposta.show');

//createReposta
Route::get('/resposta',[\App\Http\Controllers\respostaController::class,'create'])->name('examesResposta.create');
Route::post('/resposta',[\App\Http\Controllers\respostaController::class,'store']);

//fazerExame
Route::get('/fazerExame',[\App\Http\Controllers\exameController::class,'teste'])->name('fazerExame.index');




