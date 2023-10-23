<?php

//Basic [first tier] Routes
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/notes', 'controllers/notes/index.php');

// shows the CREATE NEW NOTE Portal
$router->get('/notes/create', 'controllers/notes/create.php');

// POST [submit] the newly created not to the database
$router->post('/notes', 'controllers/notes/store.php');

// Shows an indivial note, for a specific user. 
$router->get('/note', 'controllers/notes/show.php');

$router->get('/note/edit', 'controllers/notes/edit.php');
$router->patch('/notes', 'controllers/notes/update.php');

// DELETEs a note: Obviously!!!
$router->delete('/note', 'controllers/notes/destroy.php');
