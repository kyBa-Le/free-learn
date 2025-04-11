<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is product page</h1>
    <hr>
    <div id="product container">
        @foreach ($products as $product)
            <div>name: {{ $product->name }}</div>
            <div>price: {{ $product->price }}</div>
            <img src="{{ $product->image }}">
            <hr>
        @endforeach
    </div>
</body>
</html>