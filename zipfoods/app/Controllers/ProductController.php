<?php
namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    private $products;

    public function __construct($app)
    {  
       parent::__construct($app);
       $this->products = new Products($this->app->path('database/products.json'));
    }

    public function index()
    {

        return $this->app->view('products.index', [
                'products' => $this->products->getAll()
                ]);
    }

    public function show()
    {
        $id = $this->app->param('id');

        # If entered /product route, rredirect to /products page
        if (is_null($id)) {
            $this->app->redirect('/products');
        }

        $product = $this->products->getById($id);

        if (is_null($product)) {
            return $this->app->view('products.missing');
        }

        return $this->app->view('products.show', [
            'product' => $product
        ]);
    }
}