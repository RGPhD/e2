<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        $this->app->db()->createTable('games', [
            'name' => 'varchar(255)',
            'team' => 'tinyint(1)'
        ]);
    }
    public function migrate()
    {
        dump('It works! You invoked your migrate command.');
    }
    public function seed()
    {
        dump('It works! You invoked your seed command.');
    }
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}
