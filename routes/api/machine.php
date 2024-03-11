<?php

use App\Http\Controllers\MachineController;
use Illuminate\Support\Facades\Route;

/* Route::get('/responsibles', [ResponsibleController::class, 'index']); */

Route::resource('machine', MachineController::class)->names('machine');