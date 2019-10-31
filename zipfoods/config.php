<?php

return [
    'app' => [
        'url' => $app->env('APP_URL', 'http://localhost'),
        'name' => $app->env('APP_NAME', 'My App'),
        'timezone' => 'America/New_York',
        'email' => 'my@email.com'
    ],
    'database' => [
        'name' => 'myapp',
        'username' => 'root',
        'password' => '',
    ]
];
