<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request,Product $product){
        $formField = $request->validate(['quantity' => 'required|numeric']);
        $formField['user_id'] = auth()->id();
        $formField['product_id'] = $product->id;
        $formField['quantity'] = (int)$formField['quantity'];
        Cart::create($formField);
        if($request -> has('continue')){
            return redirect('/')->with('message','Product added to cart!');
        }
        return redirect('/cart')->with('message','Product added to cart!');

    }
}
