<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUser = 7; 

// check if the person trying to delete a note is authorized . 
$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id'=> $_GET['id']])->findOrFail();

authorize ($note['user_id']!=$currentUser);

// run delete query;
$db->query('delete from notes where id = :id', [
    'id' => $_GET['id']
]);

// after deleting a note, re-direct to notes page and exit the condition. 
header('location:/notes');
exit();
    





