<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(auth()->user()->is_admin)
    <form method="post" action="{{ route('products.store') }}">
        <div>
            <input type="text" name="title">
        </div>
        <div>
            <input type="number" name="price">
        </div>
    </form>
@endif
</body>
</html>
