<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('js/lib/jquery/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('js/lib/owl-carousel/assets/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/lib/jquery.fancybox/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/lib/owl-carousel/assets/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font/font.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/media.css') }}" />





</head>
<body>
<div id="app">
    <div class="wrapper index">

        <header class="header">
            <div class="container">
                <div class="top_head">
                    <a class="logo" href="#"><img src="{{ asset('img/logo.png') }}"></a>
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
                        <a href="#login" class="fancybox_popup login">Вход</a>
                        <a href="#checkin" class="fancybox_popup checkin">Регистрация</a>
                        @else
                        <button href="{{ route('logout') }}" form="logout-form" >Выход {{ Auth::user()->name }}</button>
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
                <div class="search">
                    <form>
                        <h2>Какую книгу вы ищете?</h2>
                        <label>
                            <input type="text" name="">
                            <button>Найти</button>
                        </label>
                    </form>
                </div>
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

        <div id="login" style="display:none;" class="modal_form_wrapp">
            <div class="modal_form">
                <div class="modal_top"><img src="img/logo.png"></div>
                <div class="title">
                    Вход
                </div>
                <div class="form">
                    <form method="POST" action="{{ route('login') }}" id="#login">
                        @csrf
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button class="btn">Вход</button>
                    </form>
                </div>
            </div>
        </div>
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
        <div id="checkin" style="display:none;" class="modal_form_wrapp">
            <div class="modal_form">
                <div class="modal_top"><img src="img/logo.png"></div>
                <div class="title">
                    Регистрация
                </div>
                <div class="form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Имя">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Телефон">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Пароль">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Повторить пароль">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div><!-- .wrapper -->

</div>
<script src="js/script.js"></script>

</body>
</html>
