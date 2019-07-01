@extends('cabinet.index')

@section('cabinet-content')

    <h2>Заказы</h2>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>Номер заказа</th>
            <th>Товар</th>
            <th>Дата заказа</th>
            <th>Статус</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>#AD213123</td>
            <td>Олег Винник: Биография</td>
            <td>2019-07-91</td>
            <td>
                <span class="text-warning">Ожидание</span>
            </td>
        </tr>
        <tr>
            <td>#AD213123</td>
            <td>Олег Винник: Биография</td>
            <td>2019-07-91</td>
            <td>
                <span class="text-success">Оплачено</span>
            </td>
        </tr>
        <tr>
            <td>#AD213123</td>
            <td>Олег Винник: Биография</td>
            <td>2019-07-91</td>
            <td>
                <span class="text-danger">Охрана отмена</span>
            </td>
        </tr>
        </tbody>
    </table>


@endsection