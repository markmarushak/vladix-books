@extends('cabinet.index')

@section('cabinet-content')

    <h2>Добавить книгу</h2>
    <form method="post" action="{{ route('category.store') }}">
        @csrf
        <div class="row">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="col-sm-12 input-group">
                <input class="form-control" type="text" name="name" placeholder="Название">

                <div class="input-group-prepend">
                    <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
                </div>
            </div>
        </div>
    </form>
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

@endsection