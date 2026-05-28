<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
    </thead>

    @foreach($products as $product)
    <tbody>
    <tr>
        <td>{{ $product['id'] }}</td>
        <td>{{$product['price']}}</td>
        <td>{{$product['description']}}</td>
    </tr>
    </tbody>
    @endforeach
</table>    