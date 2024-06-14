<?php

use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Route;

Route::get('/portfolioDk', [PortoController::class, 'home']);
Route::get('/portfolioDk/projects', [PortoController::class, 'projects']);
Route::get('/portfolioDk/contact', [PortoController::class, 'contact']);
