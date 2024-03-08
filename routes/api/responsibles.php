<?php

use App\Http\Controllers\ResponsibleController;
use Illuminate\Support\Facades\Route;

/* Route::get('/responsibles', [ResponsibleController::class, 'index']); */

Route::resource('responsible', ResponsibleController::class);