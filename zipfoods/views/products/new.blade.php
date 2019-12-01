@extends('templates.master')

@section('content')

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@elseif($confirmationName)
<div class='alert alert-success'>
    Successfully added {{ $confirmationName }}.
</div>
@endif

<div id='product-show'>

    <form method='POST' id='product-review' action='/products/add-product'>
        <h3>Add a New Product</h3>
        <div class='form-group'>
            <label for='name'>Name of Product</label>
            <input type='text' class='form-control' name='name' id='name' placeholder='Enter Product Name' value='{{ $app->old("name") }}'>
        </div>

        <div class='form-group'>
            <label for='description'>Description of Product</label>
            <textarea name='description' id='description' class='form-control' placeholder='Enter Product Description'>{{ $app->old('description') }}</textarea>
        </div>

        <div class='form-group'>
            <label for='price'>Price of Product</label>
            <input type='text' class='form-control' name='price' id='price' value='{{ $app->old("price") }}' placeholder='Enter Product Price'>
        </div>

        <div class='form-group'>
            <label for='weight'>Weight of Product</label>
            <input type='text' class='form-control' name='weight' placeholder='Enter Product Weight' id='weight' value='{{ $app->old("weight") }}'>
        </div>

        <br>
        <div class='form-group'>
        <strong><p><label for='available'>How Many New Products are Available?</label></strong></p>
            <input type='text' class='form-control' name='available' id='available' placeholder='Enter Number of Products Available'
                value='{{ $app->old("available") }}'>
        </div>

        <br>
        <div class='form-group'>
            <strong><p>Is the New Product Perishable?</p></strong>
            <input type='radio' name='perishable' id='yes' value='1'>
            <label for='yes'>Yes, the Product is Perishable</label>

            <p><input type='radio' name='perishable' id='no' value='0'>
            <label for='no'>No, the Product is Not Perishable</label></p>
        </div>
        <br>
        <button type='submit' class='btn btn-primary'>Submit New Product</button>
    </form>

</div>

<p><a href='/products'>&larr; Return to {{ $app->config('app.name') }} Products Page</a></p>
<p><a href='/'>&larr; Return to {{ $app->config('app.name') }} Home Page</a></p>

@endsection