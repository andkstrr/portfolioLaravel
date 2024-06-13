<?php

use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Route;

Route::get('/blog', [PortoController::class, 'home']);
Route::get('/blog/projects', [PortoController::class, 'projects']);
Route::get('/blog/contact', [PortoController::class, 'contact']);
