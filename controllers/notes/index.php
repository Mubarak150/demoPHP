<?php
$config = require('config.php');
$db = new Database($config['database']);


$title = "My Notes";
$notes = [];
$notes = $db->query("SELECT * FROM notes WHERE user_id = 7")->getAll();

require 'views/notes/index.view.php';



