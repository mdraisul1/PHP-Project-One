<?php
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Note";

// $id = $_GET['id'];

$notes = $db->query('SELECT * FROM notes WHERE id = :id', [

    'id' => $_GET['id']

])->fetch();

if(! $nones){
    abort();
}

if($nones['user_id'] == 2){

    abort(403);
}

require "view/note.view.php";

