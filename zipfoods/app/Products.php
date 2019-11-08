<?php

namespace App;

class Products
{
    # Properties
    public $products = [];

    # Methods
    public function __construct($dataSource)
    {
        $json = file_get_contents($dataSource);
        $this->products = json_decode($json, true);
    }

    public function getAll()
    {
        return $this->products;
    }

    public function getById(int $id)
    {
        return $this->products[$id] ?? null;
    }
}