@extends('layout.master')

@section('content')
    <div class="container">
        <div class="card1">
            <img width="250" height="250" src="/images/products/{{ $cum->image }}" class="card__image" alt="" >
            <div class="card__content">
                <h1 class="card__title">{{ $cum->title }}</h1>
                <span class="card__date">{{ $cum->text }}</span>
            </div>
        </div>
    </div>
@endsection
