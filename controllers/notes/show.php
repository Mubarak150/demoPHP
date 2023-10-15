<?php
// require "functions.php";
// require "Database.php";
$config = require base_path('config.php');
$db = new Database($config['database']);


$note = [];
$currentUser = 7; 

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id'=> $_GET['id']])->findOrFail();

// if(! $note) {
//     abort ();
// }
authorize ($note['user_id']!=$currentUser);

view('notes/show.view.php', [
    'title' => 'Note',
    'note' => $note
]);




