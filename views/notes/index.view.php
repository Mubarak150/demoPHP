<?php require base_path("views/partials/head.php"); ?>
<body class="h-full">

<div class="min-h-full">
  <?php require base_path("views/partials/nav.php"); ?>

  <?php require base_path("views/partials/banner.php"); ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <h3>
        <?php foreach ($notes as $note): ?>
        <li>
          <a class="text-gray-900 hover:underline hover:text-blue-700" href="/note?id= <?= $note['id'] ?>"><?= htmlspecialchars($note['body']) ?></a>  </li>
        <?php endforeach; ?>
      </h3>

      <p class="mt-8 text-blue-900 hover:underline"><a  href="/notes/create">create</a></p>
    </div>
  </main>
</div>


</body>
</html>