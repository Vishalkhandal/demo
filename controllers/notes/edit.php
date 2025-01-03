<?php

// echo "hello";

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes where id = :id', ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] == $currentUserId);

view('notes/edit.view.php', [
    'heading' => 'Edit Note',
    'errors' => [],
    'note' => $note
]);
