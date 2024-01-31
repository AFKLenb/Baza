@extends('layout.master')

@section('content')
    <div class="container">
        <img width="250" height="250" src="/images/products/{{$product->image}}" alt="">
        <h1>{{$product->name}}</h1>
        <p>{{$product->text}}</p>
    </div>
@endsection
