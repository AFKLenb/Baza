@extends('layout.master')

@section('content')
    <div class="container">
        <ul class="list">
            @forelse($cums as $cum)

                <li class="card" style="width: 350px;">
                    <img width="250" height="200" src="/images/cums/{{$cum->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 style="padding-bottom: 20px; font-size: 20px; height: 100px;" class="card-title">{{$cum->name}}</h5>
                        <p style="font-size: 16px; height: 150px; overflow-y: scroll; " class="card-text">{{$cum->text}}</p>
                        <div style="margin-top: 40px; margin-bottom: 20px; display: flex; justify-content:space-between;" class="card__buttons">
                            <p style="font-size: 24px; text-transform: uppercase; " class="card-text">{{$cum->price}}</p>
                            <p style="font-size: 24px;; " class="card-text">Колличество: {{$cum->quantity}}</p>
                        </div>
                        <td>
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
                        </td>
                        <a style="margin-top: 10px;" href="{{route ('cum', $cum->id)}}" class="btn btn-primary">Перейти к товару </a>
                    </div>
                </li>

            @empty
                {{__ ('Эта страница редоктируется')}}
            @endforelse
        </ul>
    </div>
@endsection
