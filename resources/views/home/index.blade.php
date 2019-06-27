@extends('layouts.app')

@section('content')

        <div class="container">
            {{-- slider --}}
            <div class="row">

                <div class="col-sm-12">
                    <h2>Новые Книги</h2>

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/img1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/img1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/img1.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>

            </div>

            <!-- Top category -->

            <div class="cat_tovar">
                <h2>Топовые категории</h2>
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-md-4 col-sm-6">
                            <div class="cat_name">
                                <img src="{{ asset('img/img1.png') }}">
                                <a href="{{ route('home.category', $category->id) }}">{{ $category->name }}</a>
                                <div class="new_ico">
                                    Новых <span>{{ count($category->products) }}</span>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
            <div class="books">
                <h2>Популярные книги</h2>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4 col-sm-6">
                            <div class="book">
                                <div class="img"><img src="img/book.png"></div>
                                <a href="#" class="title">Олег Рой:  Двойная жизнь</a>
                                <div class="price"><span>150</span> грн</div>
                                <a href="#" class="btn">КУПИТЬ</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

@endsection