<?php
namespace App\Controllers;
//remove  use App\Products;
class ProductController extends Controller
{
    private $products;
    public function __construct($app)
    {  
       parent::__construct($app);
       //remove $this->products = new Products($this->app->path('database/products.json'));
    }
    public function index()
    { 
        return $this->app->view('products.index', [
            'products' => $this->app->db()->all('products')
        ]);
    }
//$this->products->getAll() took this out above, now geting database
    public function show()
    {
        $id = $this->app->param('id');
        # If entered /product route, redirect to /products page
        if (is_null($id)) 
    {
            $this->app->redirect('/products');
    }
# to load individual products
        // take out: $product = $this->products->getById($id);
        $product = $this->app->db()->findById('products', $id);
        if (is_null($product)) 
    {
            return $this->app->view('products.missing');
    }
        #load review details here
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);
           //dump($reviews);
        $confirmationName = $this->app->old('confirmationName');
   
        return $this->app->view('products.show', [
            'product' => $product,
            'reviews' => $reviews,
            'confirmationName' => $confirmationName,
        ]);
    }
    public function saveReview()
    {
          $this->app->validate([
           'name' => 'required',
           'content' => 'required|minLength:200', # Multiple validation rules are separated by a |
             # Some rules accept paramaters, which follow a :
         ]);
         # Extract data from the form submission
        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');
        $timestamp = $this->app->input('timestamp');
        //code check by using dump($_POST); extract form data below
        # Insert into the database
        $data = [
            'name' => $name,
            'content' => $content,
            'product_id' => $id,
            'timestamp' => $timestamp,
        ];
        #content of review change review to content in code
        $this->app->db()->insert('reviews', $data);
        $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
  
    }
    #new for quiz 12
 public function newProduct()
 {
     $confirmationName = $this->app->old('confirmationName');
     
     return $this->app->view('products.new', [
         'confirmationName' => $confirmationName
     ]);
 }
 # Add a product" form from the page /products/new
 public function addProduct()
 {
     $this->app->validate([
         'name' => 'required',
         'description' => 'required',
         'price' => 'required|numeric',
         'available' => 'required|digit',
         'weight' => 'required|numeric',
         'perishable' => 'required'
     ]);
     # If validation fails user is redirected back to the "Add new a product" page
     # Extract data from the form submission
     $name = $this->app->input('name');
     $description = $this->app->input('description');
     $price = $this->app->input('price');
     $available = $this->app->input('available');
     $weight = $this->app->input('weight');
     $perishable = $this->app->input('perishable');

     # Insert into the products database
     $data = [
         'name' => $name,
         'description' => $description,
         'price' => $price,
         'available' => $available,
         'weight' => $weight,
         'perishable' => $perishable,
     ];
     $this->app->db()->insert('products', $data);
     $this->app->redirect('/products/new', ['confirmationName' => $name]);
 }

}