<?php
use Core\Database;
$config = require base_path('config.php');
require base_path('Core/Validate.php');
$db = new Database($config['database']);
$errors = [];

if($_SERVER['REQUEST_METHOD']=== 'POST') {
    if (! Validate::string($_POST['body'], 1, 150)) { // min = 1, max = 150;  
        $errors['body'] = 'the number of characters in this field must be inbetween 1 - 150';

    }
    else {
        $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
        'body'=> $_POST['body'],
        'user_id' => 7
         ]);
         $_POST['body'] = '';
    }
    
}

view('notes/create.view.php', [
    'title' => 'Create a Note',
    'errors' => $errors
]);