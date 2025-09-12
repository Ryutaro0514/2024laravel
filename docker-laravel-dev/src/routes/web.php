<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/signup",[UserController::class,"create"])->name("user.signupCrate");
Route::post("/signup",[UserController::class,"store"])->name("user.signupStore");
Route::get("/signin",[LoginController::class,"signin"])->name("login");
Route::post("/signin",[LoginController::class,"check"])->name("user.check");