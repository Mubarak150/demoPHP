<?php

use Core\Database;
// require "functions.php";
// require "Database.php";
$config = require base_path('config.php');
$db = new Database($config['database']);
// dd($_SERVER['REQUEST_METHOD']);
$currentUser = 7; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $db->query("SELECT * FROM notes WHERE id = :id", ['id'=> $_GET['id']])->findOrFail();

    authorize ($note['user_id']!=$currentUser);

    $db -> query('delete from notes where id = :id', [
        'id' => $_GET['id']
    ]);

    header('location:/demoPHP/notes');
    exit();
    
}
else {

    $note = [];
   

    $note = $db->query("SELECT * FROM notes WHERE id = :id", ['id'=> $_GET['id']])->findOrFail();

    authorize ($note['user_id']!=$currentUser);

    view('notes/show.view.php', [
        'title' => 'Note',
        'note' => $note
    ]);
}



