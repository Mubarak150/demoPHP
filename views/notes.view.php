<?php require("views/partials/head.php"); ?>
<body class="h-full">

<div class="min-h-full">
  <?php require("views/partials/nav.php"); ?>

  <?php require("views/partials/banner.php"); ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <h3>
        <?php foreach ($notes as $note): ?>
        <li>
          <a class="text-gray-900 hover:underline hover:text-blue-700" href="/demoPHP/note?id= <?= $note['id'] ?>"><?= $note['body'] ?></a>  </li>
        <?php endforeach; ?>
      </h3>
    </div>
  </main>
</div>


</body>
</html>