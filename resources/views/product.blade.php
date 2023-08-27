@extends('header')
@include('partials._hero')
@include('partials._search')
@section('content')

<h1>{{$product->name}}</h1>
@endsection
