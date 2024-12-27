<?php

// This is the username and password of my server database
// $username = "u705875743_demo";
// $db_password = "!>1xnMrV7p6A";

define('URL_ROOT', '/basicphp/demo');

if ($_SERVER['HTTP_HOST'] === "localhost") {
    $config = [
        'database' => [
            'host' => 'localhost',
            'dbname' => 'my_demo',
            'charset' => 'utf8mb4'
        ]
    ];
} else {
    $config = [
        'database' => [
            'host' => 'srv786.hstgr.io',
            'dbname' => 'u705875743_demo',
            'charset' => 'utf8mb4'
        ]
    ];
}
