@extends('layout.master')

@section('content')
    <div class="container">
        <h2>{{$cum->name}}</h2>
        <div style="display: flex; align-items: start; gap: 60px; margin: 50px 0; padding: 20px; background-color: #2c2c2c; border-radius: 25px" class="card__content">
            <div class="">
                <img style="border-radius: 15px" width="350" height="300" src="/images/cums/{{$cum->image}}" alt="">
                <div style="display: flex; justify-content:space-between; margin-top: 20px;" class="">
                    <p style="font-size: 24px; text-transform: uppercase; " class="card-text">{{$cum->price}}</p>
                    <p style="font-size: 24px;; " class="card-text">Колличество: {{$cum->quantity}}</p>
                </div>
                @if($cum->rating == 0)
                    <div class="alert alert-danger text-center">
                        {{ __('★☆☆☆☆') }}
                    </div>
                @elseif($cum->rating == 1)
                    <div class="alert alert-danger text-center">
                        {{ __('★★☆☆☆') }}
                    </div>
                @elseif($cum->rating == 2)
                    <div class="alert alert-warning text-center">
                        {{ __('★★★☆☆') }}
                    </div>
                @elseif($cum->rating == 3)
                    <div class="alert alert-success text-center">
                        {{ __('★★★★☆') }}
                    </div>
                @elseif($cum->rating == 4)
                    <div class="alert alert-success text-center">
                        {{ __('★★★★★') }}
                    </div>
                @endif
            </div>
            <div class="">
                <h3 style="font-size: 24px; text-transform: uppercase; font-weight: 700;">Описание:</h3>
                <p style="font-size: 18px; margin-top: 20px;">{{$cum->text}}</p>
            </div>

        </div>

    </div>
@endsection
