<?php
// require "functions.php";
// require "Database.php";
$config = require('config.php');
$db = new Database($config['database']);


$title = "Note";
$note = [];
$currentUser = 7; 

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id'=> $_GET['id']])->findOrFail();

// if(! $note) {
//     abort ();
// }
authorize ($note['user_id']!=$currentUser);

require 'views/notes/show.view.php';




