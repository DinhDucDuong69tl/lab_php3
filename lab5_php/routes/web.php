<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;
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

Route::get('movies/search', [MovieController::class, 'search'])->name('movies.search');

Route::get('/', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies/create', [MovieController::class, 'store'])->name('movies.store');
Route::get('/movies/{movie}/show', [MovieController::class, 'show'])->name('movies.show');
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{movie}/edit', [MovieController::class, 'update'])->name('movies.update');
Route::delete('/movies/{movie}/delete', [MovieController::class, 'destroy'])->name('movies.destroy');




