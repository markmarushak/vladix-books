@extends('admin.index')

@section('admin')

    <div class="comment modal_form ">
        <h2>Добавить книгу</h2>
        <form method="get" action="{{ route('category.update') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $category['id'] }}">
            <div class="row">
                <div class="col-sm-12">
                    <input class="form-control" type="text" name="name" value=" {{$category['name']}} " placeholder="Название">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" name="submit" class="btn btn-success">Обновить</button>
                </div>
            </div>
        </form>
    </div>

@endsection