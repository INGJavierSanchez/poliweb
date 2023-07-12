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

<<<<<<< HEAD

=======
/*Route::resource('articulos','App\Http\Controllers\ArticuloController');*/
>>>>>>> f8a659babdb09a1b95fa675def270f9b527b3692
Route::resource('estudiantes','App\Http\Controllers\EstudianteController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
