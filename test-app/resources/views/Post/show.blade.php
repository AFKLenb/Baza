@extends('layout.master')

@section('content')
    <div class="container">
        <div class="card1">
            <img src="/images/{{ $post->image }}" class="card__image" alt="" >
            <div class="card__content">
                <h1 class="card__title">{{ $post->title }}</h1>
                <span class="card__date">{{ $post->text }}</span>
            </div>
        </div>
    </div>
@endsection
