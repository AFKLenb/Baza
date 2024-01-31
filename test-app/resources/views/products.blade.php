@extends('layout.master')

@section('content')
    <div class="container">
        <ul class="list">
                @forelse($products as $product)

                    <li class="card" style="width: 18rem;">
                        <img width="250" height="250" src="/images/products/{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->text}}</p>
                            <a href="{{route ('product', $product->id)}}" class="btn btn-primary">Перец</a>
                        </div>
                    </li>

                @empty
                    {{__ ('Эта страница редоктируется')}}
                @endforelse
        </ul>
    </div>
@endsection
