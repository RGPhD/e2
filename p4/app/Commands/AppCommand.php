<?php
namespace App\Commands;
class AppCommand extends Command
{
        public function migrate()
    {
        $this->app->db()->createTable('games', [
            'player' => 'varchar(255)',
            'computer' => 'varchar(255)',
            'winner' => 'int',
        ]);

        dump('It works! You invoked your migrate command.');
    }

    public function seed()
    {
# Instantiate a new instance of the Faker\Factory class
# $faker = \Faker\Factory::create();

$fakerChampion = ['Chicago', 'Kansas'];
# Use a loop to create 10 games
for ($i = 0; $i < 10; $i++) {

$fakerPlayer = $fakerChampion[rand(0, 1)];
$fakerComputer = $fakerChampion[rand(0, 1)];
# or  $fakerChampion[array_rand($fakerChampion)];  

if ($fakerPlayer == $fakerComputer) {
    $winner = true;
} else {
    $winner = false;
}

# Set up game/and data for table
    $game = [
            'winner' => $winner,
            'player' => $player,
            'computer' => $computer,
        ];

    # Insert game
    $this->app->db()->insert('games', $game);
}
        dump('It works! You invoked your seed command.');
    }
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}
