<?php

require('Validator.php');

$config = require('config.php');
$db = new Database($config['database']);

$header = "Creating Node";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Server side validation
    $errors = [];

    // Use void Validator class function
    if (!Validator::textValidation($_POST["body"], 0, 1000)) {
        $errors['body'] = 'The body must be at least 1000 and required!!';
    }

    // if there are no errors, that means the form is correct!
    if (empty($errors)) {
        $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require "views/notes/create.view.php";