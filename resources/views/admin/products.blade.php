<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Admin :: Produtos</title>
</head>
<body>
<h1>Admin :: Produtos</h1>
<ul>
    @foreach($products as $product)
        <li>{{ $product->name }}<br/><dd>{{ $product->description }}<br/>Preço: R$ {{ number_format($product->price, 2, ',', '.') }}</dd></li>
    @endforeach
</ul>

</body>
</html>