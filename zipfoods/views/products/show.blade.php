@extends('templates.master')

@section('title')
{{ $product['name'] }}
@endsection

@section('content')
 

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@elseif($confirmationName)
<div class='alert alert-success'>
    Thank you, {{ $confirmationName }} for your review!
</div>
@endif

<div id='product-show'>
    <h2>{{ $product['name'] }}</h2>

    <img src='/images/products/{{ $product["id"] }}.jpg' class='product-image'>

    <p class='product-description'>
        {{ $product['description'] }}
    </p>

    <div class='product-price'>${{ $product['price'] }}</div>

    <form method='POST' id='product-review' action='/products/save-review'>
        <h3>Review this product</h3>
        <input type='hidden' name='id' value='{{ $product["id"] }}'>
        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>

        <div class='form-group'>
            <label for='content'>Review</label>
            <textarea name='content' id='content' class='form-control'>{{ $app->old('content') }}</textarea>
        </div>
        <button type='submit' class='btn btn-primary'>Submit Review</button>
    </form>

     <h3>Reviews</h3>
    @if($reviews)
    @foreach($reviews as $review)
    <div class='review'>
        <span class='review-name'>{{ $review['name'] }}</span>
        <p>{{ $review['content'] }}</p>
    </div>
    @endforeach
    @else
    No reviews yet.
    @endif
</div>

     

<a href='/products'>&larr; Return to all products</a>

@endsection