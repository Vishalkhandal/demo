<?php

$heading = "My Notes";

if ($_SERVER['HTTP_HOST'] === "localhost") {
    $db = new Database($con['database']);
} else {
    $db = new Database($con['database'], "u705875743_demo", "!>1xnMrV7p6A");
}

// $id = $_GET['id'];
$id = 6;
$query = "SELECT * FROM notes where user_id = :id";

$notes = $db->query($query, ['id' => $id])->fetchAll();

require('views/notes.view.php');
