@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <h3>Категории</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('category.store') }}">Новая</a></li>
                        <li class="list-group-item"><a href="{{ route('category.index') }}">Список</a></li>
                    </ul>
                    <hr>
                    <h3>Книги</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('products.store') }}">Новая</a></li>
                        <li class="list-group-item"><a href="{{ route('products.index') }}">Список</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="comment modal_form ">
                    <h2>Список Категорий</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Название категории</th>
                                <th>обновить</th>
                                <th>удалить</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category['name'] }}</td>
                                <td><a href="{{ route('category.update', $category['id']) }}" class="btn btn-warning">обновить</a></td>
                                <td><a href="{{ route('category.delete', $category['id']) }}" class="btn btn-danger">удалить</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection