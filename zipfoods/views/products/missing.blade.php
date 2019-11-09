@extends('templates.master')

@section('title')
Product Not Found
@endsection

@section('content')
<h2>Product 

{{-- This returns on all invalid/null product ids. Without this echo every invalid product id page will return the message without a number. --}}

<?php
$url = 'http://zipfoods.robelyngarcia.me/product?id=99';
$str = substr(strrchr($url, '='), 1);
echo $str;    
?>

Not Found.</h2>

<p>Uh oh - we were not able to find the product you were looking for.</p>

<p><a href='/products'>Check out our other products...</a></p>
@endsection