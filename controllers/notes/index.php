<?php
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

// $notes = [];
$notes = $db->query("SELECT * FROM notes WHERE user_id = 7")->getAll();

view('notes/index.view.php', [
    'title' => 'My Notes',
    'notes' => $notes 
]);




