<?php

// This is the username and password of my server database
// $username = "u705875743_demo";
// $db_password = "!>1xnMrV7p6A";


// Determine if the environment is local or production
if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] === "localhost:8000") {
    return [
        'database' => [
            'host' => 'localhost',
            'dbname' => 'my_demo',
            'charset' => 'utf8mb4',
            'username' => 'root',
            'password' => ''
        ],
    ];
} else {
    return [
        'database' => [
            'host' => 'srv786.hstgr.io',
            'dbname' => 'u705875743_demo',
            'charset' => 'utf8mb4',
            'username' => 'u705875743_demo',
            'password' => '!>1xnMrV7p6A'
        ],
    ];
}

// return [
//     'database' => [
//         'host' => 'localhost',
//         'dbname' => 'my_demo',
//         'charset' => 'utf8mb4',
//         'username' => 'root',
//         'password' => ''
//     ]
// ];
