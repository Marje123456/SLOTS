<?php

use App\Http\Controllers\PremiseController;
use Illuminate\Support\Facades\Route;

/* Route::get('/responsibles', [ResponsibleController::class, 'index']); */

Route::resource('premise', PremiseController::class)->names('premise');