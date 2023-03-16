<head>
  <title>My Photo Gallery</title>
</head>
<body>
  <h1>My Photo Gallery</h1>
  <div class="gallery">
    <?php
    // Get a list of all the files in the photos folder
    $files = scandir(__DIR__);

    // Loop through the files and display each image
    foreach ($files as $file) {
      if (in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), array("jpg", "jpeg", "png", "gif"))) {
        echo "<img src='$file' alt=''>";
      }
    }
    ?>
  </div>
</body>
</html>