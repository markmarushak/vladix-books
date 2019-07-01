@extends('cabinet.index')

@section('cabinet-content')

    <h2>История платежей</h2>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>Номер заказа</th>
            <th>Товар</th>
            <th>Стоимость</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>#AD213123</td>
            <td>Олег Винник: Биография</td>
            <td>200.99 <span>грн</span></td>
        </tr>
        </tbody>
    </table>


@endsection