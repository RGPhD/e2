<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your test command.');
    }
    public function migrate()
    {
        $this->app->db()->createTable('games', [
            'name' => 'varchar(255)',
            'team' => 'tinyint(1)'
        ]);
        dump('It works! You invoked your migrate command.');
    }
    public function seed()
    {
# Instantiate a new instance of the Faker\Factory class
$faker = \Faker\Factory::create();

# Use a loop to create 10 reviews
for ($i = 0; $i < 10; $i++) {

    # Set up a game
    $game = [
        'name' => $faker->name,
        'team' => ($i % 2 == 0) ? 0 : 1,
    ];

    # Insert the game
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
