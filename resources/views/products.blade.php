@extends('header')
@include('partials._hero')
@include('partials._search')
@section('content')
<div class="container ">

 <div class="row">
        @unless (count($products) == 0)
            @foreach($products as $product)
                <div class="col-lg-6 mb-4">
                    <div class="card border rounded p-4">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="w-100" src="{{ asset('images/no-image.png') }}" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3 class="h4">{{ $product->name }}</h3>
                                <div class="h5 font-weight-bold mb-3">${{ $product->price }}</div>
                                <ul class="list-inline">
                                    <li class="list-inline-item bg-dark text-white rounded-pill py-1 px-3 mr-2">
                                        <a href="#" style="color: white;">T-Shirt</a>
                                    </li>
                                    <li class="list-inline-item bg-dark text-white rounded-pill py-1 px-3 mr-2">
                                        <a href="#" style="color: white;">Lacoste</a>
                                    </li>
                                    <li class="list-inline-item bg-dark text-white rounded-pill py-1 px-3 mr-2">
                                        <a href="#" style="color: white;">L</a>
                                    </li>
                                    <li class="list-inline-item bg-dark text-white rounded-pill py-1 px-3 mr-2">
                                        <a href="#" style="color: white;">Black</a>
                                    </li>
                                </ul>
                                <div class="mt-3">
                                    <a href="/products/{{ $product->id }}" class="btn btn-primary">View Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            @endforeach
        @else
            <div class="col">
                <p>No product found</p>
            </div>
        @endunless
    </div>
    
</div>
@endsection


