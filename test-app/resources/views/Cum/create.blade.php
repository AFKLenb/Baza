@extends('layout.master')

@section('content')
    <div class="container">
        <form action="{{ route('cum.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Категория</label>
                </div>
                <select name="collection_id" class="custom-select" id="inputGroupSelect01">
                    @foreach($collections as $collection)
                        <option value="{{$collection->id}}">{{$collection->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название товара</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Описание товара</label>
                <textarea class="form-control" name="text" id="" cols="30" rows="10"></textarea>
                {{--                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Изображение товара</label>
                <input type="file"  class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Цена товара</label>
                <input type="text"   class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Статус</label>
                </div>
                <select name="rating" class="custom-select" id="inputGroupSelect01">
                    <option value="0">1 звезда</option>
                    <option value="1">2 звезды</option>
                    <option value="2">3 звезды</option>
                    <option value="3">4 звезды</option>
                    <option value="4">5 звезд</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Колличество товара</label>
                <input type="text"  class="form-control" name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp">
                {{--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>--}}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Статус</label>
                </div>
                <select name="is_active" class="custom-select" id="inputGroupSelect01">
                    <option value="0">Не активен</option>
                    <option value="1">Активен</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
