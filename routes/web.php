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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('berita');
Route::get('/detail/{id}', [\App\Http\Controllers\PostController::class,'detail'])->name('berita');

//Route::get('/mahasiswa/delete/{id}',[\App\Http\Controllers\MahasiswaController::class,'delete'])->name('mahasiswa');
