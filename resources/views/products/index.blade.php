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
    <a href="{{ route('products.create') }}">Add new product</a>
@endif
@if($products->isNotEmpty())
    @foreach($products as $product)
        <div>
            {{ $product->title }}
            {{ $product->price_eur }}
            <form action="{{ route('products.destroy',$product) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete"/>
            </form>
        </div>
    @endforeach
@endif

@if($products->isEmpty())
    <div>
        {{ 'not found' }}
    </div>
@endif

</body>
</html>
