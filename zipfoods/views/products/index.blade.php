@extends('templates.master')

@section('title')
All Products
@endsection

@section('content')
<h2>All products</h2>
 
<div id='product-index'>
@foreach($products as $product)
<a href='/product?id={{ $product['id'] }}'>
<div class='product'>
    <div class='product-name'>{{ $product['name'] }}</div>
    <img class='product-thumb' src="/images/products/{{ $product['id'] }}.jpg">
    </div>
@endforeach
</div>

<p>
<a href='http://zipfoods.robelyngarcia.me'>ZipFoods Home</a>
</p>
@endsection