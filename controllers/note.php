<?php
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Note";

// $id = $_GET['id'];

$notes = $db->query('SELECT * FROM notes WHERE user_id = :user_id AND id = :id', [

    'user_id' => 2,
    'id' => $_GET['id']

])->fetch();

dd($notes);

require "view/note.view.php";

