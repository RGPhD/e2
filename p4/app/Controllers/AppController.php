<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $newName = $this->app->old('newName', null);

        return $this->app->view('index', ['newName' => $newName]);
    }

    public function saveNewGame()
    {  
       $this->app->validate([
            'team' => 'required',
            'name' => 'required|minLength:2',
        ]);

       $data = [
        'name' => $this->app->input('name'),
        'team' => $this->app->input('team')
       ];

       $this->app->db()->insert('games', $data);

       $this->app->redirect('/', ['name' => $data['name']]);
       
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
