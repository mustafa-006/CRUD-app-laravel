<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get("/",[AnimalController::class , "index"]);

Route::get("/create",function(){
    return view("create");
});



Route::get("/animal/update/{id}",[AnimalController::class,"edit"]);
Route::put("/animal/update/{id}",[AnimalController::class,"update"]);


Route::post("/animal/create",[AnimalController::class,"store"]);
Route::get("/animal/delete/{id}",[AnimalController::class,"delete"]);