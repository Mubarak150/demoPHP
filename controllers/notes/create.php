<?php
$config = require('config.php');
require('Validate.php');
$db = new Database($config['database']);
$title = 'New Note';
$errors = [];

if($_SERVER['REQUEST_METHOD']=== 'POST') {
    if (! Validate::string($_POST['body'], 1, 150)) {
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
require "views/notes/create.view.php";