
<?php

require 'config.php';
require 'function.php';
require 'Database.php';
require 'routes.php';

// dd(parse_url($_SERVER['REQUEST_URI']));

// $id = $_GET['id'];
// $query = "SELECT * FROM users where id = :id";

// $posts = $db->query($query, ['id' => $id])->fetchAll();

// dd($posts);


// require 'config.php';

// Check if $config is set
// if (isset($config)) {
//     echo "Configuration loaded successfully.<br>";

//     // Check if 'database' exists in $config
//     if (isset($config['database'])) {
//         var_dump($config['database']);
//     } else {
//         echo "The 'database' configuration is missing.";
//     }
// } else {
//     echo "Configuration not found.";
// }
