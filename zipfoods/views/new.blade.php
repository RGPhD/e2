@extends('templates.master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')
<h2>New Product Page</h2>

<p>{{ $app->config('app.name') }} is your one-stop-shop for convenient online grocery shopping in the greater Boston area.
</p>
<a href='/products'>&rarr; Return to our selection of products.</a>
</p>
<hr>

<form method='POST' id='product-review'>
        <h3>Add a Product</h3>
        <input type='hidden' name='id' value='{{ $product["id"] }}'>
        <div class='form-group'>
            <label for='name'>Name of Product</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>

        <div class='form-group'>
            <label for='content'>Description</label>
            <textarea name='content' id='content' class='form-control'>{{ $app->old('content') }}</textarea>
        </div>
        <div class='form-group'>
            <label for='name'>Price</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>
        <div class='form-group'>
            <label for='name'>Weight</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>
        <div class='form-group'>
            <label for='name'>Available</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>
        <div class='form-group'>
            <label for='name'>Perishable</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>
        <button type='submit' class='btn btn-primary'>Submit Product</button>
    </form>

@endsection