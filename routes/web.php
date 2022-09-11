<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivosController;
use App\Http\Controllers\HomeController;


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
//Route::get('/', function() 
//{ return view('Welcome');});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('inicio');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::resource('home', HomeController::class);

//Route::get('/Activos', function() 
//{ return view('activo.index');});

//Auth::routes(['register'=>false,'passwords/reset'=>false]); // elimina registro y olvido de contraseñas

Route::get('activo/create',[ActivosController::class,'create']);

Route::resource('Activos', ActivosController::class);



//Route::get('/Activos', [\App\Http\Controllers\ActivosController::class, 'Activo'])->name('Activos');
Route::get('/Empleados', [\App\Http\Controllers\EmpleadosController::class, 'Empleado'])->name('Empleado');





