
<?php

require 'config.php';
require 'function.php';
require 'routes.php';
require 'Database.php';

$db = new Database($config['database'], "u705875743_demo", "!>1xnMrV7p6A");

$id = $_GET['id'];
$query = "SELECT * FROM users where id = :id";

$posts = $db->query($query, ['id' => $id])->fetchAll();

// $query = "SELECT * FROM users";
// $posts = $db->query($query)->fetchAll();

dd($posts);
