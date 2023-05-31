<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\PuntosPaticipacionController;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/usuarios',UsuarioController::class);
Route::resource('/asistencia',AsistenciaController::class);
Route::resource('/permiso',PermisoController::class);
Route::resource('/puntos_participacion',PuntosPaticipacionController::class);
Route::get('/PuntosPaticipacion',[App\Http\Controllers\UsuarioController::class, 'PuntosPaticipacion'])->name('PuntosPaticipacion');
Route::get('/registropermiso',[App\Http\Controllers\UsuarioController::class, 'permiso'])->name('registropermiso');

