<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Admin :: Categorias</title>
</head>
<body>
<h1>Admin :: Categorias</h1>
<ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}<br/><dd>{{ $category->description }}</dd></li>
    @endforeach
</ul>

</body>
</html>