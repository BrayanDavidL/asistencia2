<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\PuntosPaticipacionController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\ExcusaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usuarios',[App\Http\Controllers\UsuarioController::class, 'json'])->name('api');
Route::get('/asistencia',[App\Http\Controllers\AsistenciaController::class, 'json'])->name('api2');
Route::get('/asistencia-filtro', [App\Http\Controllers\AsistenciaController::class,'filter'])->name('filter');
Route::post('/registrar-asistencia/{usuarioId}', [AsistenciaController::class, 'create'])->name('registrar-asistencia');
Route::post('/registrar_permiso/{usuarioId}', [PermisoController::class, 'create'])->name('registrar_permiso');
Route::post('/registrar_puntoparticipacion',[App\Http\Controllers\PuntosPaticipacionController::class, 'create'])->name('registrar_puntoparticipacion');
Route::get('/excusa',[App\Http\Controllers\ExcusaController::class, 'json'])->name('excusa');
Route::get('/permiso',[App\Http\Controllers\PermisoController::class, 'json'])->name('permiso');
