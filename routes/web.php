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

Route::get('/', [App\Http\Controllers\PendudukController::class, 'index']);
Route::get('penduduk/create/{id}', [App\Http\Controllers\KartuKeluargaController::class, 'create']);
Route::resource('penduduk', \App\Http\Controllers\PendudukController::class);
Route::resource('keluarga', \App\Http\Controllers\KartuKeluargaController::class);
Route::get('/keluarga/{{$keluarga->id}}/tambah', [App\Http\Controllers\KartuKeluargaController::class, 'create'])->name('keluarga.tambah');\
Route::post('keluarga/edit/{$keluarga->id}', [App\Http\Controllers\KartuKeluargaController::class, 'update']);
Route::post('keluarga/{{$penduduks->id}}/edit', [App\Http\Controllers\KartuKeluargaController::class, 'update']);
Route::get('/keluarga/post_delete/{id}',[KartuKeluargaController::class,'delete']);

