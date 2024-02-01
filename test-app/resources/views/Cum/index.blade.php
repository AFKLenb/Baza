@extends('layout.master')

@section('content')
    <div class="container">
        @if($massage = Session::get('success'))
            <div class="alert alert-success" role="alert">
                <p>{{$massage}}</p>
            </div>
        @endif
        <div class="row">
            <a href="{{ route('cum.create') }}" class="btn btn-primary">Новый товар</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Изображение</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Рейтинг</th>
                        <th scope="col">Колличество</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Действия</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($cums as $cum)
                    <tr>
                        <th scope="row">{{ $cum->id }}</th>
                        <td>{{ $cum->name }}</td>
                        <td>{{ $cum->text }}</td>
                        <td>{{$cum->collection->name}}</td>
                        <td><img width="150" height="150" src="/images/cums/{{ $cum->image }}" alt="Тут могла быть ваша реклама"></td>
                        <td>{{ $cum->price }}</td>
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
                        <td>{{ $cum->quantity }}</td>
                        <td>
                            @if($cum->is_active == 0)
                                <div class="alert alert-danger text-center">
                                    {{ __('Не активна') }}
                                </div>
                            @else
                                <div class="alert alert-success text-center">
                                    {{ __('Активна') }}
                                </div>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('cum.edit', $cum->id) }}" class="btn btn-success">{{__ ('Редактировать')}}</a>
                            <a href="{{ route('cum.show', $cum->id) }}" class="btn btn-warning">{{__ ('Подробнее')}}</a>
                            <form action="{{route('cum.delete', $cum->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">УДАЛИТЬ</button>
                            </form>
                        </td>

                    </tr>
                @empty
                    {{__ ('Данные не найдены')}}
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
