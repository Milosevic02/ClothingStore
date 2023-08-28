<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//All Products
Route::get('/', [ProductController::class,'index']);

//Single Products
Route::get('/products/{product}',[ProductController::class,'show']);

//Show Register Form
Route::get('/register',[UserController::class,'register']);

//Create new User
Route::post('/users',[UserController::class,'store']);

