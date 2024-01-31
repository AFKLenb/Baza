@extends('layout.master')

@section('content')
    <div class="container">
        @if($massage = Session::get('success'))
            <div class="alert alert-success" role="alert">
                <p>{{$massage}}</p>
            </div>
        @endif
        <div class="row">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Новая категория</a>
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
                @forelse($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->text }}</td>
                        <td>
                            @if($category->is_active == 0)
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
                            <a  href="{{ route('category.edit', $category->id) }}" class="btn btn-success">{{__ ('Редактировать')}}</a>
                            <a href="{{ route('category.show', $category->id) }}" class="btn btn-warning">{{__ ('Подробнее')}}</a>
                            <form action="{{route('category.delete', $category->id) }}" method="POST" >
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
