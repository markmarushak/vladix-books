@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('category.index') }}">Категории</a></li>
                        <li class="list-group-item"><a href="{{ route('products.index') }}">Книги</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">

                @yield('admin')

            </div>
        </div>
    </div>

@endsection