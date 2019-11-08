@extends('templates.master')

@section('title')
All Products
@endsection

@section('content')
<h2>All products</h2>

<p>{{ $app->config('app.name') }} is your one-stop-shop for convenient online grocery shopping in the greater Boston area.
</p>

<p>
<a href='/products'>Check out our selection of products...</a>
</p>
@endsection