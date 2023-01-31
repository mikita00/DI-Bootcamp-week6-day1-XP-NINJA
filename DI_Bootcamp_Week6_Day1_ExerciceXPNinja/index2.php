<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ExerciceXPGOLD</title>
  </head>
  <body>
      <?php

      $name = $_POST['username'];
      $color = $_POST['colors'];

      echo "<h1> $name</h1>". " has chosen "."<h1>$color</h1>". " color";
      ?>
    
     

  </body>
</html>