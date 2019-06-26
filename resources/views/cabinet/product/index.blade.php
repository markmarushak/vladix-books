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
                    <h2>Список Книг</h2>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Название кнгии</th>
                            <th>Цена</th>
                            <th>Автор</th>
                            <th>обновить</th>
                            <th>удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product['name'] }}</td>
                                <td>{{ $product['price'] }}</td>
                                <td>{{ $product['author'] }}</td>
                                <td><a href="{{ route('products.update', $product['id']) }}" class="btn btn-warning">обновить</a></td>
                                <td><a href="{{ route('products.delete', $product['id']) }}" class="btn btn-danger">удалить</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection