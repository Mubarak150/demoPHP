<?php



// use Core\Validate;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
require base_path('Core/Validate.php');

$currentUser = 75; 

$note = [];

// 1. find the note
$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id'=> $_POST['id']])->findOrFail();


// 2. authenticate
authorize ($note['user_id']!=$currentUser); // A FUNCTION TO CHECK AUTHENTICATION FOR ACCESS TO NOTES OF A USER. 

// 3. validate
$errors = [];

if (! Validate::string($_POST['body'], 1, 150)) { // min = 1, max = 150;  
    $errors['body'] = 'the number of characters in this field must be inbetween 1 - 150';

}

// 4. act accordingly, if no errors...
if(count($errors)){
    view('notes/edit.view.php', [
        'title' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}
else{
    $db->query("UPDATE notes SET body = :body where id= :id", [
     'body'=> $_POST['body'],
     'id' => $_POST['id']
     ]);
     
    // 5. now redirect the user to NOTES
     header('location: /notes');
     die(); 
 }