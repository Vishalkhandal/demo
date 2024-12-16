<?php

define('URL_ROOT', '/basicphp/demo');

if ($_SERVER['HTTP_HOST'] === "localhost") {
    return $config = [
        'database' => [
            'host' => 'srv786.hstgr.io',
            'dbname' => 'u705875743_demo',
            'charset' => 'utf8mb4'
        ]
    ];
} else {
    return $config = [
        'database' => [
            'host' => 'srv786.hstgr.io',
            'dbname' => 'u705875743_demo',
            'charset' => 'utf8mb4'
        ]
    ];
}
