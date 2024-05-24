<?php

$header = "Note";
$userId = 1;

$config = require ('config.php');
$db = new Database($config['database']);

$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, [
        'id' => $_GET['id']
])->findOrFail();

// TODO: create own fetch function ✅
// TODO: create own abort function ✅
// TODO: move authorization function ✅
// TODO: change from fetchAll to get... function... ✅

authorize($note['user_id'] === $userId);

require "views/note-view.php";