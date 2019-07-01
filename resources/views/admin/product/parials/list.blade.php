<table class="table table-hover">
    <thead>
    <tr>
        <th>Название кнгии</th>
        <th>Автор</th>
        <th>Категория</th>
        <th>Цена</th>
        <th>обновить</th>
        <th>удалить</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['author'] }}</td>
            <td>{{ $product['category_id'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td><a href="{{ route('products.update', $product['id']) }}" class="btn btn-warning">обновить</a></td>
            <td><a href="{{ route('products.delete', $product['id']) }}" class="btn btn-danger">удалить</a></td>
        </tr>
    @endforeach
    </tbody>
</table>