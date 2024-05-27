<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', function(){ return view('rotas.inicio');});

//POSTS
Route::prefix('/post')->group(function(){
    //Route::get('/', [PostController::class, 'index']);
    Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/', [PostController::class,'store'])->name('posts.store');
    Route::get('/{post}', [PostController::class,'show'])->name('posts.show');
    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::patch('/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::prefix('/photo')->group(function(){
    Route::get('/create', [PhotoController::class, 'create'])->name('photos.create');
    Route::post('/', [PhotoController::class,'store'])->name('photos.store');
    Route::get('/{photo}', [PhotoController::class,'show'])->name('photos.show');
    Route::get('/{photo}/edit', [PhotoController::class, 'edit'])->name('photos.edit');
    Route::patch('/{photo}', [PhotoController::class, 'update'])->name('photos.update');
    Route::get('/{photo}', [PhotoController::class, 'destroy'])->name('photos.destroy');
});





//Resto
Route::get('/documents/download/{id}', [DocumentController::class, 'download']);

Route::prefix('/')->group(function(){
    Route::get('/{nome}', [RotasController::class, 'index'])->name('rotas.index');
});


require __DIR__.'/auth.php';
