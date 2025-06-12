@if (count($products) > 0)
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name Hello</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>${{ number_format($product['price'], 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No products available.</p>
@endif
