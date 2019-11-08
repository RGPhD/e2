@extends('templates.master')

@section('title')
    {{ $product['name'] }}
@endsection

@section('content')

<div id='product-show'>
    <h2>{{ $product['name'] }}</h2>

    <img src='/images/products/{{ $product["id"] }}.jpg' class='product-image'>

    <p class='product-description'>
        {{ $product['description'] }}
    </p>

    <div class='product-price'>${{ $product['price'] }}</div>
</div>
<p>
<a href='/products'>&larr; Return to all products</a>
</p>
<p>{{ $app->config('app.name') }} is your one-stop-shop for convenient online grocery shopping in the greater Boston area.
</p>
@endsection