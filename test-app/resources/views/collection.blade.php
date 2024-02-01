@extends('layout.master')

@section('content')
    <div class="container">
        <div style="display: flex; gap: 30px" class="container">
            @forelse($collections as $collection)
                <div sty class="card" style="width: 400px;">
                    {{--            <img width="250" height="250" src="..." class="card-img-top" alt="...">--}}
                    <div class="card-body">
                        <h4 class="card-title">{{ $collection->name }}</h4>
                        <p style="font-size: 16px" class="card-text">{{ $collection->text }}</p>
                        <a href="{{route ('cums', $collection->id)}}" class="btn btn-primary">{{__ ('Перейти к товарам')}}</a>
                    </div>
                </div>
            @empty
                {{__ ('Эта страница редоктируется')}}
            @endforelse
        </div>
    </div>
@endsection
