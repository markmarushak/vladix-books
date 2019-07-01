@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('cabinet.index') }}">Главная кабинета</a></li>
                        <li class="list-group-item"><a href="{{ route('cabinet.profile') }}">Редактировать Профиль</a></li>
                        <li class="list-group-item"><a href="{{ route('cabinet.cards') }}">Привязанные карты</a></li>
                        <li class="list-group-item"><a href="{{ route('cabinet.orders') }}">Заказы</a></li>
                        <li class="list-group-item"><a href="{{ route('cabinet.feedback') }}">Служба поддержки</a></li>
                        <li class="list-group-item"><a href="{{ route('cabinet.history') }}">история платежей</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">

                @yield('cabinet-content')

            </div>
        </div>
    </div>
@endsection
