<?php

$header = "Note";
$userId = 1;

$config = require ('config.php');
$db = new Database($config['database']);

$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, [
        'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $userId);

require "views/note-view.php";