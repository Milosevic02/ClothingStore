<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Show all Products
    public function index(){
        return view('products.index',[
            'products' => Product::latest()->filter(request(['tag','search']))
            ->paginate(6)
        ]);
    }

    //Show single Product
    public function show(Product $product){
        return view('products.show',[
            'product' => $product
        ]);
    }

    public function create(){
        return view('products.create');
    }


}
