<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AnimalController::class, "index"]);

Route::get("/show/{id}", [AnimalController::class, "show"]);

Route::get("/create", [AnimalController::class, "create"]);

Route::post("/store", [AnimalController::class, "store"]);