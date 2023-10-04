<?php

require "functions.php";
// require "router.php";

// connection to the database;
// declaring  a class
// class Person {
//     public $name;
//     public $age; 

//     public function breathe () {
//         echo $this->name . ' is breathing!';
//     }
// }

// // adding elements to the class
// $person = new Person ();
// $person-> name = 'john doe';
// $person -> age = 25; 

// $person->breathe ();

$dsn = "mysql:host=localhost;port=3306;dbname=Demo2;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement -> execute();

$posts = $statement -> fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post) {
    echo '<li>' . $post['title'] . "</li>";
}
