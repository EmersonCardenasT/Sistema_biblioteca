<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
use App\Models\Alumno;
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

Auth::routes();

Route::get('prestamos/pdf', [PrestamoController::class, 'pdf'])->name('prestamos.pdf');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('autors', AutorController::class);
Route::resource('editorials', EditorialController::class);
Route::resource('libros', LibroController::class);
Route::resource('alumnos', AlumnoController::class);
Route::resource('prestamos', PrestamoController::class);
