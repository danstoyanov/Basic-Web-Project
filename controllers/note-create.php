<?php

$config = require('config.php');
$db = new Database($config['database']);

$header = "Creating Node";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Server side validation
    $errors = [];

    // if input body is empty
    if (strlen($_POST["body"]) === 0) {
        $errors['body'] = 'The body field is required.';
    }

    // check the length of the input body
    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'The body is too long!!';
    }

    // if there are no errors, that means the form is correct!
    if (empty($errors)) {
        $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require "views/note-create.view.php";