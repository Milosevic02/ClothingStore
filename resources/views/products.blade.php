@extends('header')
@include('partials._hero')
@include('partials._search')
@section('content')
<div class="container">
    @foreach ($products as $product)

    <h1>
        <a href="/products/{{$product->id}}">{{$product->name}}
    </h1>

@endforeach
</div>
@endsection


