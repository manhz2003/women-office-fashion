<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Color</th>
                <th>Size</th>
                <th>Old Price</th>
                <th>New Price</th>
                <th>Thumbnail</th>
                <th>Category ID</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->color }}</td>
                    <td>{{ $product->size }}</td>

                    {{-- number_format giúp định dạng số 0 muốn hiển thị ra --}}
                    <td>{{ number_format($product->old_price, 3) }}</td>
                    <td>{{ number_format($product->old_price, 3) }}</td>
                    <td>
                        <img src="{{ asset($product->thumbnail) }}" alt="Thumbnail" style="max-width: 100px; max-height: 100px;">
                    </td>
                    <td>{{ $product->categorie_id }}</td>
                    <td>{{ $product->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
