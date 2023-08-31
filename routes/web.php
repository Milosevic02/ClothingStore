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

//Show Create Product Form
Route::get('products/create',[ProductController::class,'create']);

//Store product data
Route::post('/products',[ProductController::class,'store']);

//Show Edit Product Form
Route::get('products/{product}/edit',[ProductController::class,'edit']);

//Update Product data
Route::put('products/{product}',[ProductController::class,'update']);

//Delete Product
Route::delete('products/{product}',[ProductController::class,'destroy']);

//Manage Product
Route::get('products/manage',[ProductController::class,'manage']);

//Single Products
Route::get('/products/{product}',[ProductController::class,'show']);

//Show Register Form
Route::get('/register',[UserController::class,'register'])->middleware('guest');

//Create new User
Route::post('/users',[UserController::class,'store']);

//Log User out
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//Show login Form
Route::get('/login',[UserController::class,'login'])->middleware('guest');

//Log in User
Route::post('users/authenticate',[UserController::class,'authenticate']);


