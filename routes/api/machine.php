<?php
use App\Http\Controllers\QRMachineController;
use App\Http\Controllers\MachineController;

use Illuminate\Support\Facades\Route;


    Route::get('machiner/{machine}', [QRMachineController::class, 'createqr'])->name('machine.createqr');
    Route::get('machineri/{machine}', [QRMachineController::class, 'activatemachine'])->name('machine.activatemachine');

 Route::resource('machine', MachineController::class)->names('machine'); 
 

