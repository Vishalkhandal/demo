<?php

require 'config.php';

dd($config['database']);
try {
    $db = new Database($config['database'], "u705875743_demo", "!>1xnMrV7p6A");
    echo "Database connected successfully";
} catch (ErrorException $th) {
    echo $th;
}

$heading = "My Notes";

dd($db);

// // $id = $_GET['id'];
// $id = 3;
// $query = "SELECT * FROM notes where user_id = :id";

// $notes = $db->query($query, ['id' => $id])->fetchAll();

// dd($notes);

require('views/notes.view.php');

// $id = $_GET['id'];
// $query = "SELECT * FROM users where id = :id";

// $posts = $db->query($query, ['id' => $id])->fetchAll();