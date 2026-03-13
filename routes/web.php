<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AprendicesController;
Route::resource('aprendices', AprendicesController::class);

use App\Http\Controllers\CentrodeformacionController;
Route::resource('centrodeformacion', CentrodeformacionController::class);

use App\Http\Controllers\EnteconformadorController;
Route::resource('enteconformador', EnteconformadorController::class);

use App\Http\Controllers\FichadecaracterizacionController;
Route::resource('fichadecaracterizacion', FichadecaracterizacionController::class);

/* NUEVA RUTA PARA BITACORAS */

use App\Http\Controllers\BitacoraController;
Route::resource('bitacora', BitacoraController::class);
