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

        </ul>  
        <div>
           <button class="inline-block mt-10 px-10 py-1 bg-blue-700 text-white opacity-80 hover:bg-blue-900"><a href="/notes">back</a></button>
          
           <form class='inline-block' method="POST">
              <!-- <input type="hidden" name="_method" value="DELETE" > -->
              <!-- <input type="hidden" name="_button_method" value="PATCH" > -->
              <input type="hidden" name="id" value="<?= $note['id'] ?>">
              <!-- <button class="inline-block mt-10 px-10 py-1 bg-red-400 text-white hover:bg-red-500">Delete</button> -->
              <a class="inline-block mt-10 px-10 py-1  text-gray-700 border border-current hover:text-white hover:bg-gray-500" href="/note/edit?id=<?= $note['id'] ?>">Update</a>
            </form>
        </div>
           
            
        

        
    </div>
  </main>
</div>


</body>
</html>