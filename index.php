
<?php

$books = [
    [
        "name" => "Book One Name",
        "author" => "author One",
        "purchaseUrl" => "www.book1.com"
    ],
    [
        "name" => "Book Four Name",
        "author" => "author One",
        "purchaseUrl" => "www.book2.com"
    ],
    [
        "name" => "Book Three Name",
        "author" => "author two",
        "purchaseUrl" => "www.book333.com"
    ]

];

$filterByKey = array_filter($books, function($book) {
    return $book["author"] === "author two";
});

require "index.view.php";
