<?php

use App\Http\Controllers\PiglyController;
use Illuminate\Support\Facades\Route;


Route::get("/register/step1", [PiglyController::class,"register_step1"]);
Route::post("/register/step1", [PiglyController::class,"register_user"]);

Route::get("/register/step2", [PiglyController::class,"register_step2"]);

Route::post('register/step2', [PiglyController::class, 'register_terget_weight']);

Route::get('register/thankyou', [PiglyController::class, 'thankyou']);

Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', [PiglyController::class, 'weight_logs']);
});
