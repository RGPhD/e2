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
        $games = $this->app->db()->all('games');

        return $this->app->view('games', ['games' => $games]);  
    }

    public function game()
    {
        return $this->app->view('game');
    }

}
