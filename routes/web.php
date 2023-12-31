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
    return view('auth.login');
});

Route::resource('estudiantes','App\Http\Controllers\EstudianteController');
Route::resource('acudientes','App\Http\Controllers\AcudienteController');
Route::get('/ciudades/{departamentoId}', 'App\Http\Controllers\CiudadController@getCiudades');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
