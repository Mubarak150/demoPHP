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