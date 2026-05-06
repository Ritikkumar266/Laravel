<h2>Items</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>

    @foreach ($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->quantity }}</td>
        </tr>
    @endforeach
</table>

<!-- <h2>Items</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>

    @foreach ($items as $item)

        @if($item->price > 30)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->quantity }}</td>
            </tr>
        @endif

    @endforeach
</table> -->