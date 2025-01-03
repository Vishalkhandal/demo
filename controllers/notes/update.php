<?php

// find the corresponding note
use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;
$errors = [];

$note = $db->query('SELECT * FROM notes where id = :id', ['id' => $_POST['id']])->findOrFail();

// authorize that the current user can edit the note
authorize($note['user_id'] == $currentUserId);

// validate the form
if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = "A boyd of no more than 1,000 characters is required.";
}

// if no validation errors, update the record in the notes database table.
if (count($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

header('location: /notes');
die();
