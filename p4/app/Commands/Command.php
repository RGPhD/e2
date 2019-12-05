<?php

namespace App\Commands;

class Command
{
    protected $app;
    
    public function __construct($app)
    {
        $this->app = $app;
    }
}
