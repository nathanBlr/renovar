<?php

use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\RotasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::prefix('/')->group(function(){
   Route::get('/', function(){
      return redirect()->route('rotas.index','inicio');
   });
    Route::get('/{nome}', [RotasController::class, 'index'])->name('rotas.index');
 });
 Route::prefix('/noticias')->group(function(){
    Route::get('/{slug}', [NoticiaController::class, 'show'])->name('noticias.show');
 });
