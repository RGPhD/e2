<?php
namespace App\Controllers;
class AppController extends Controller
{

    public function index()
    {
        $game = $this->app->old('game', null);
        return $this->app->view('index', ['game' => $game]);
    }

    public function saveNewGame()
    {  
       $this->app->validate([
            'team' => 'required',
        ]);

        $player = $this->app->input('team');

        $champion = ['Chicago', 'Kansas'];
        $computer = $champion[rand(0, 1)];

if ($player == $computer) {
    $winner = true;
} else {
    $winner = false;
}

// Persist each game results to the database table
// Save input field team to the $game array
        $game = [
            'winner' => $winner,
            'player' => $player,
            'computer' => $computer,
        ];

       $this->app->db()->insert('games', $game);

       $this->app->redirect('/', ['game' => $game]);
       
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

