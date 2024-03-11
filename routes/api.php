<?php

require_once 'api/responsibles.php';
require_once 'api/premise.php';
require_once 'api/machine.php';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
