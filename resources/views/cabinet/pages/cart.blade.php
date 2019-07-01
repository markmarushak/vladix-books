@extends('cabinet.index')

@section('cabinet-content')

    <div class="container">
        <h2>Популярные книги</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Название товара</th>
                    <th>количество</th>
                    <th>стоимость</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Олег Винник: Биография</td>
                    <td>1</td>
                    <td>200.99 <span>грн</span></td>
                    <td><a href="#" class="btn btn-danger"><i class="fas fa-window-close"></i></a></td>
                </tr>
            </tbody>

        </table>

        <button class="btn btn-main">Забрать книги</button>
    </div>

@endsection