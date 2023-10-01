<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col h-screen items-center">
    <h1 class = "text-gray-700">
        <?php
           echo "Recommended Books";
        ?>
            </h1>
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

        // function filter($items, $key, $value) {
        //     $filterByKey = [];

        //     foreach ($items as $item) {
        //         if($item[$key] === $value) {
        //             $filterByKey[] = $item;
        //         }
        //     }
        //     return $filterByKey;
        // }

        $filterByKey = array_filter($books, function($book) {
            return $book["author"] === "author two";
        });
        ?>
     
    <ul class=" text-gray-900 font-bold mx-auto">
        <?php foreach ($filterByKey as $book) : ?>
            

        <li>
            <a href="<?= $book["purchaseUrl"] ?>" >
                <?= $book["name"]; ?> by <?= $book["author"]; ?>
            </a>
            
        </li>
            
        <?php endforeach ?>
    </ul>

    

</body>
</html>