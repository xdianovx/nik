<?php

use App\Http\Controllers\PostController;
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
    return view('index');
})->name('index');


//CRUD
Route::prefix('post')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('post.index');
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/', [PostController::class, 'store'])->name('post.store');
    Route::get('/{id}', [PostController::class, 'show'])->name('post.show');
    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/{id}/delete', [PostController::class, 'destroy'])->name('post.destroy');
    Route::get('/{id}/restore', [PostController::class, 'restore'])->name('post.restore');
});




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
