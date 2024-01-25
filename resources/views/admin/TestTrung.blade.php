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
                <th>picture</th>
                <th>id product</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        <img src="{{ asset($product->path) }}" alt="Thumbnail" style="max-width: 100px; max-height: 100px;">
                    </td>
                    <td>{{ $product->product_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
