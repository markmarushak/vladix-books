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
                    <h2>Добавить книгу</h2>
                    <form method="post" action="{{ route('category.store.new') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <input class="form-control" type="text" name="name" placeholder="Название">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection