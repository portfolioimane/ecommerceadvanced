<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>${{ $product->price }}</p>
                <a href="{{ route('cart.add', $product->id) }}">Add to Cart</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
