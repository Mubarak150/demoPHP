<?php

// use Core\Database;
// $config = require base_path('config.php');
// $db = new Database($config['database']);
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUser = 7; 

$note = [];

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id'=> $_GET['id']])->findOrFail();

authorize ($note['user_id']!=$currentUser); // A FUNCTION TO CHECK AUTHENTICATION FOR ACCESS TO NOTES OF A USER. 

view('notes/show.view.php', [
    'title' => 'Note',
    'note' => $note
]);




