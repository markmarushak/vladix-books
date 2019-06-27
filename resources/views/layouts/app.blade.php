<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font/font.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/media.css') }}"/>


</head>
<body>
<div id="app">
    <div class="wrapper index">
        <header class="header">
            <div class="container">
                {{--                --}}
                <div class="top_head">
                    <a class="logo" href="{{ route('home.index') }}"><img src="{{ asset('img/logo.png') }}"></a>
                    <div class="head_catalog">
                        <a href="#"><i class="fa fa-bars"></i>Каталог</a>
                    </div>
                    <div class="head_phone">
                        <i class="fa fa-phone-square"></i>
                        <a href="#">+38095-38-53-11</a><br>
                        <a href="#">+38099-41-86-14</a>
                    </div>
                    <div class="nav">
                        <ul>
                            <li><a href="#">О нас</a></li>
                        </ul>
                    </div>
                    <div class="recall">
                        <a href="#"><i class="fa fa-phone"></i></a>
                    </div>
                    <div class="auth">
                        @guest
                            <a href="#login" class="login" data-toggle="modal" data-target="#login">Вход</a>
                            <a href="#checkin" class="checkin" data-toggle="modal" data-target="#register">Регистрация</a>
                        @else
                            <button href="{{ route('logout') }}" form="logout-form">
                                Выход {{ Auth::user()->name }}</button>
                            <form class="hidden" id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        @endguest

                    </div>
                    <div class="basket">
                        <a href="#"><i class="fa fa-shopping-basket"></i></a>
                    </div>
                </div>
                @if(Route::currentRouteName() == 'home.index')
                    <div class="search">
                        <form>
                            <h2>Какую книгу вы ищете?</h2>
                            <label>
                                <input type="text" name="">
                                <button>Найти</button>
                            </label>
                        </form>
                    </div>
                @endif
            </div>
        </header><!-- .header-->


        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="container">
                <a class="logo" href="#"><img src="img/logo.png"></a>
                <a href="#download" class="fancybox_popup btn">Скачать приложение</a>
            </div>
        </footer><!-- .footer -->

        @include('layouts.partials.login')

        @include('layouts.partials.register')

        <div id="download" style="display:none;" class="modal_form_wrapp">
            <div class="modal_form">
                <div class="modal_top"><img src="img/logo.png"></div>
                <div class="title">
                    Скачать приложение
                </div>
                <div class="form">
                    <a href="#">Скачать</a>
                </div>
            </div>
        </div>


    </div><!-- .wrapper -->

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/lib/jquery.fancybox/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/lib/owl-carousel/owl.carousel.js') }}"></script>
<script src="js/script.js"></script>

</body>
</html>
