
<?php

require 'config.php';
require 'function.php';
require 'Database.php';
require 'routes.php';


$id = $_GET['id'];
$query = "SELECT * FROM users where id = :id";

$posts = $db->query($query, ['id' => $id])->fetchAll();

dd($posts);
