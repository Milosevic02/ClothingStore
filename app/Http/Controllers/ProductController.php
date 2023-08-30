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

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required','min:5'],
            'tags' => 'required',
            'price' => 'required|numeric',
            'size' => ['required','max:4'],
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        }

        Product::create($formFields);

        return redirect('/')->with('message','Product created successfully');

    }

    public function edit(Product $product){
        return view('products.edit',['product' => $product]);
    }


}
