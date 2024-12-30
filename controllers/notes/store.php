<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];
$currentUserId = 1;

if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = "A boyd of no more than 1,000 characters is required.";
}

if (! empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

$db->query('insert into notes(body, user_id) values(:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 1
]);

header('location: /notes');

die();