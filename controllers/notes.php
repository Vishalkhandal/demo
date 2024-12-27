<?php

$heading = "My Notes";

$con = [
    'database' => [
        'host' => 'srv786.hstgr.io',
        'dbname' => 'u705875743_demo',
        'charset' => 'utf8mb4'
    ]
];

if ($_SERVER['HTTP_HOST'] === "localhost") {
    $db = new Database($config['database']);
    echo "database connected on local";
} else {
    $db = new Database($con['database'], "u705875743_demo", "!>1xnMrV7p6A");
    echo "database connected on server";
}

$id = $_GET['id'];
// $id = 6;
$query = "SELECT * FROM notes where user_id = :id";

$notes = $db->query($query, ['id' => $id])->fetchAll();

require('views/notes.view.php');
