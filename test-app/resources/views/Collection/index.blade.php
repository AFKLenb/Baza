@extends('layout.master')

@section('content')
    <div class="container">
        @if($massage = Session::get('success'))
            <div class="alert alert-success" role="alert">
                <p>{{$massage}}</p>
            </div>
        @endif
        <div class="row">
            <a href="{{ route('collection.create') }}" class="btn btn-primary">Новая категория</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название категории</th>
                        <th scope="col">Описание категории</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Действие</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($collections as $collection)
                    <tr>
                        <th scope="row">{{ $collection->id }}</th>
                        <td>{{ $collection->name }}</td>
                        <td>{{ $collection->text }}</td>
                        <td>
                            @if($collection->is_active == 0)
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
                            <a  href="{{ route('category.edit', $collection->id) }}" class="btn btn-success">{{__ ('Редактировать')}}</a>
                            <a href="{{ route('category.show', $collection->id) }}" class="btn btn-warning">{{__ ('Подробнее')}}</a>
                            <form action="{{route('category.delete', $collection->id) }}" method="POST" >
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
