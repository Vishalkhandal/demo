<?php

use Core\Validator;
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$email = $_POST['email'];
$password = $_POST['password'];

// Validate the form inputs

$errors = [];

if (! Validator::email($email)) {
    $errors['email'] = "Please provide a correct email address";
}

if (! Validator::string($password, 7, 255)) {
    $errors['password'] = "Please provide a password at least seven characters.";
}

if (! empty($password)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

// check if the account already exists

$result = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

// dd($result);

// if yes, redirect to a login page.
if ($user) {
    header('location: /');
} else {
    // if not, save one to the database, and then log the user in, and redirect.

    $db->query('insert into users(email, password) values(:email, :password)', [
        'email' => $email,
        'password' => $password
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header("location: /");

    exit();
}
