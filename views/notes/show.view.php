<?php require base_path("views/partials/head.php"); ?>
<body class="h-full">

<div class="min-h-full">
  <?php require base_path("views/partials/nav.php"); ?>

  <?php require base_path("views/partials/banner.php"); ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <ul>
            <p class="text-gray-900 ">
              <?= htmlspecialchars($note['body']) ?>
            </p>
            <button class="mt-10 px-10 py-1 bg-blue-700 text-white opacity-80 hover:bg-blue-900"><a href="/demoPHP/notes">back</a></button>
        </ul>

        
    </div>
  </main>
</div>


</body>
</html>