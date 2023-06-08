<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[AdminController::class,'index'])->name('admin.indexadmin');

Route::get('/estudiantes_menu',[EstudiantesController::class,'index'])->name('estudiantes.index');
Route::get('/estudiantes_lista',[EstudiantesController::class,'show'])->name('estudiantes.lista');
Route::post('/estudiantes_lista',[EstudiantesController::class,'store'])->name('estudiantes.store');

Route::get('/profesores_menu',[ProfesorController::class,'index'])->name('profesores.index');
Route::get('/profesores_lista',[ProfesorController::class,'show'])->name('estudiantes.lista');
Route::post('/profesores_lista',[ProfesorController::class,'store'])->name('profesores.store');