<?php

use App\Http\Controllers\PiglyController;
use Illuminate\Support\Facades\Route;


Route::get("/register/step1", [PiglyController::class,"register"]);
Route::get("/register/step2", [PiglyController::class,""]);