<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AprendicesController;
use App\Http\Controllers\CentrodeformacionController;
use App\Http\Controllers\EnteconformadorController;
use App\Http\Controllers\FichadecaracterizacionController;
use App\Http\Controllers\BitacoraController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('aprendices', AprendicesController::class)
    ->parameters(['aprendices' => 'aprendices']);

Route::resource('centrodeformacion', CentrodeformacionController::class)
    ->parameters(['centrodeformacion' => 'centrodeformacion']);

Route::resource('enteconformador', EnteconformadorController::class)
    ->parameters(['enteconformador' => 'enteconformador']);

Route::resource('fichadecaracterizacion', FichadecaracterizacionController::class)
    ->parameters(['fichadecaracterizacion' => 'fichadecaracterizacion']);

Route::resource('bitacora', BitacoraController::class)
    ->parameters(['bitacora' => 'bitacora']);
