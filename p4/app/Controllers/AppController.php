<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return $this->app->view('index');
    }

    public function games()
    { 
        return $this->app->view('games');
    }

    public function game()
    {
        return $this->app->view('game');
    }

}
