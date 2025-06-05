<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\EstudiantesController;




Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/notas', function () {
    return view('notas');
});

Route::get('/matricula', function () {
    return view('matricula');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/editarnotas', function () {
    return view('editarnotas');
});
 */
Route::get('/mostrar',[NotasController::class,'index']);
Route::get('/crear',[NotasController::class,'crear']);
Route::get('/editar',[NotasController::class,'editar']);
Route::get('/eliminar',[NotasController::class,'eliminar']);

Route::get('materia/mostrar',[MateriaController::class,'index']);
Route::get('materia/crear',[MateriaController::class,'crear']);
Route::get('materia/editar',[MateriaController::class,'editar']);
Route::get('materia/eliminar',[MateriaController::class,'eliminar']);

Route::get('estudiantes/mostrar',[EstudiantesController::class,'index']);
Route::get('estudiantes/crear',[EstudiantesController::class,'crear']);
Route::get('estudiantes/editar',[EstudiantesController::class,'editar']);
Route::get('estudiantes/eliminar',[EstudiantesController::class,'eliminar']);