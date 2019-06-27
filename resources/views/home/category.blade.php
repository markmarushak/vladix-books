@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="books">
            <h2>Популярные книги</h2>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 col-sm-6">
                        <div class="book">
                            <div class="img"><img src="{{ asset('img/book.png') }}"></div>
                            <a href="{{ route('home.product', $product->id) }}" class="title">{{ $product->name }}</a>
                            <div class="price"><span>{{ $product->price }}</span> грн</div>
                            <a href="#" class="btn">КУПИТЬ</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection