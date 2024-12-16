<?php

echo "hi";

$db = new Database($config['database'], "u705875743_demo", "!>1xnMrV7p6A");

$heading = "My Notes";

// $id = $_GET['id'];
$id = 3;
$query = "SELECT * FROM notes where user_id = :id";

$notes = $db->query($query, ['id' => $id])->fetchAll();

dd($notes);

require('views/notes.view.php');

// $id = $_GET['id'];
// $query = "SELECT * FROM users where id = :id";

// $posts = $db->query($query, ['id' => $id])->fetchAll();