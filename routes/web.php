<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

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

Route::get('/', function () {
    return view('products',[
        'products' => Product::all()
    ]);
});

Route::get('/products/{id}',function($id){
    $product = Product::find($id);
    if($product){
        return view('product',[
            'product' => $product
        ]);
    }else{
        abort('404');
    }

});
