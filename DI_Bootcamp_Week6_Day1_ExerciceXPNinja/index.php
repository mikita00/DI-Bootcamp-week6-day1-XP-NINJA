<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ExerciceXPGOLD</title>
  </head>
  <body>
      <h2 style="color:red; font-weight:bold; text-decoration:underline;"> ExerciceXPNinja 1</h2>

      <form action="index2.php" method="post">
          <label for="username">Name:</label>
          <input type="text" name="username" required>
          <br> <br>
          <label for="colors"> Color:</label>
        <select style="width:175px;" name="colors" id="colors" required>
            <option value="White">White</option>
            <option value="black">Black</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>
        <br> <br>
        <input type="submit" name="submit" value="Submit">
      </form>
    
    ?>
  </body>
</html>