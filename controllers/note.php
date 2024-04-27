<?php

$header = "Note";

$config = require ('config.php');
$db = new Database($config['database']);

$query = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($query, [
        'id' => $_GET['id']
])->fetch();

if (!$note) {
    abort();
}

if ($note['user_id'] !== 1) {
    abort(Response::FORBIDDEN);
}

require "views/note-view.php";