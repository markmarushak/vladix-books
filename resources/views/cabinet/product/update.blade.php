@extends('cabinet.index')

@section('cabinet-content')

    <div class="comment modal_form ">
        <h2>Добавить книгу</h2>
        <form action="{{ route('products.update', Request()->id) }}">

            <div class="row">
                <div class="col-sm-12">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">

                        <div class="col-sm-6">
                            <select class="form-control" name="category">
                                <option value="">Выберите Категорию</option>
                                @foreach($categories as $category)
                                    @if($category['id'] == $product['category_id'])
                                        <option value="{{ $category['id'] }}" selected>{{ $category['name'] }}</option>
                                    @else
                                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="name" placeholder="Название" value="{{ $product['name'] }}">
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="author" placeholder="Автор" value="{{ $product['author'] }}">
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="price" placeholder="Цена" value="{{ $product['price'] }}">
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="year" placeholder="Год выпуска" value="{{ $product['year'] }}">
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="edition" placeholder="Издание" value="{{ $product['edition'] }}">
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="language" placeholder="Язык(и)" value="{{ $product['language'] }}">
                        </div>

                        <div class="col-sm-12">
                            <textarea name="description" placeholder="Описание">{{ $product['description'] }}</textarea>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success">Добавить</button>
                </div>
            </div>
        </form>
    </div>

@endsection