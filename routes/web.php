<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [ProductController::class,"index"])->name("product.index");
Route::get("/filter", [ProductController::class,'filter'])->name('filter');
