<?php

use App\Http\Controllers\ResponsibleController;
use Illuminate\Support\Facades\Route;

Route::get('/responsibles', [ResponsibleController::class, 'index']);
Route::get('/responsibles', [ResponsibleController::class, 'create']);
Route::post('/responsibles/{id}', [ResponsibleController::class, 'store']);
Route::get('/responsibles/{id}', [ResponsibleController::class, 'show']);
Route::get('/responsibles/{id}', [ResponsibleController::class, 'edit']);
Route::put('/responsibles/{id}', [ResponsibleController::class, 'update']);
Route::delete('/responsibles/{id}', [ResponsibleController::class, 'destroy']);

