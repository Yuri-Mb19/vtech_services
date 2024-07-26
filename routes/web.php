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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'Principal'])->name('site.index');
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'salvar'])->name('site.contato');
Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobre-nos');
Route::get('/faqs',[\App\Http\Controllers\FaqsController::class,'index'])->name('site.faqs');
