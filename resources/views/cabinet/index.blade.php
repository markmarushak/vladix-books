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
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <select class="form-control" name="category">
                                    @foreach($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                    @endforeach
                                </select>
                                <input class="form-control" type="text" name="name" placeholder="Название">
                                <input class="form-control" type="text" name="author" placeholder="Автор">
                                <textarea name="description" placeholder="Описание"></textarea>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" name="submit" class="btn">Отмена</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" name="submit" class="btn">Добавить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection