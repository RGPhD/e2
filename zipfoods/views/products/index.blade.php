@extends('templates.master')

@section('title')
All Products
@endsection

@section('content')
<h2>All products</h2>
 
<div id='product-index'>
@foreach($products as $product)
<a href="/product?id={{ $product['id'] }}">
<div class='product'>
    <div class='product-name'>{{ $product['name'] }}</div>

    @if($product['id'] > 10)       
        <img class='product-thumb' src='/images/zipfoods-logo.png' alt='ZipFoods Logo' alt='zipfoods image'>     
    @else          
        <img class='product-thumb' src="/images/products/{{ $product['id'] }}.jpg">           
    @endif

    </div>
@endforeach
</div>

<p><a href='/'>&larr; Return to {{ $app->config('app.name') }} Home Page</a></p>
@endsection