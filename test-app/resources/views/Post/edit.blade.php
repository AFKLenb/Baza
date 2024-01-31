@extends('layout.master')

@section('content')
    <div class="container">
        <form action="{{route('post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название поста</label>
                <input type="text" value="{{ $post->title }}" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Текст поста</label>
                <input type="text" value="{{ $post->text }}" class="form-control" name="text" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Картинка поста</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <img width="250" height="170" src="/images/{{ $post->image }}" alt="">
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection
