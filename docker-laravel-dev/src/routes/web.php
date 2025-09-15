<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/signup",[UserController::class,"create"])->name("user.signupCrate");
Route::post("/signup",[UserController::class,"store"])->name("user.signupStore");
Route::get("/signin",[LoginController::class,"signin"])->name("login");
Route::post("/signin",[LoginController::class,"check"])->name("user.check");

    Route::get("/",[HomeController::class,"index"])->name("index");
    Route::get("/event",[HomeController::class,"event"])->name("event");
    Route::get("/spot",[HomeController::class,"spot"])->name("spot");
    Route::get("/log",[HomeController::class,"log"])->name("log");