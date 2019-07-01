@extends('cabinet.index')

@section('cabinet-content')

    <h2>Ваш Профиль</h2>
    <form action="" class="form">
        <div class="row">
            <div class="form-group col-sm-6 col-12">

                <label for="userEmail">Почтовый ящик</label>
                <input type="email" class="form-control" name="email" id="userEmail" aria-describedby="emailHelp"
                       placeholder="Введите вашу почту">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                </small>

            </div>

            <div class="form-group col-sm-6 col-12">

                <label for="userName">Ваше имя</label>
                <input type="text" class="form-control" name="name" id="userName" aria-describedby="nameHelp"
                       placeholder="Введите ваше имя">
                <small id="nameHelp" class="form-text text-muted">You must enter valid name
                </small>

            </div>

            <div class="form-group col-sm-6 col-12">

                <label for="userPassword">Пароль</label>
                <input type="text" class="form-control" name="password" id="userPassword" aria-describedby="passwordHelp"
                       placeholder="Введите новый пароль">
                <small id="passwordHelp" class="form-text text-muted">We'll never share your password with anyone else.
                </small>

            </div>

            <div class="form-group col-sm-6 col-12">

                <label for="phoneUser">Мобильный телефон</label>
                <input type="number" class="form-control" id="phoneUser" aria-describedby="phoneHelp"
                       placeholder="Enter email">
                <small id="phoneHelp" class="form-text text-muted">We'll never share your mobile with anyone else.
                </small>

            </div>

            <div class="form-group col">
                <button class="btn btn-main">Обновить данные</button>
            </div>
        </div>

    </form>

@endsection