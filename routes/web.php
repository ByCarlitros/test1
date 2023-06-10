<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\PropuestasController;
use App\Http\Controllers\EstudiantesController;
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

Route::get('/',[AdminController::class,'index'])->name('admin.index');

Route::get('/admin/editar',[PropuestasController::class,'edit'])->name('admin.edit');
Route::get('/admin/editar/{estudiante}',[PropuestasController::class,'show'])->name('admin.change');
Route::get('/estudiantes/create',[PropuestasController::class,'create'])->name('estudiantes.proyecto');

Route::post('/estudiantes/create',[PropuestasController::class,'store'])->name('propuestas.store');


Route::get('/estudiantes',[EstudiantesController::class,'index'])->name('estudiantes.index');
Route::get('/estudiantes/lista',[EstudiantesController::class,'show'])->name('estudiantes.lista');
Route::post('/estudiantes/lista',[EstudiantesController::class,'store'])->name('estudiantes.store');


Route::get('/index/profesores',[ProfesoresController::class,'index'])->name('profesores.index');
Route::get('/profesores/lista',[ProfesoresController::class,'show'])->name('profesores.lista');
Route::post('/profesores/lista',[ProfesoresController::class,'store'])->name('profesores.store');
Route::delete('/profesores/{comentario}',[ProfesoresController::class,'destroy'])->name('profesores.destroy');