<!DOCTYPE html>
<html lang="en">
    <head>
        <title>POST </title>
    </head>
    <body>
        <form action ="post.php" method ="post">
        password:<input type ="password" name="pass">
        <input type ="submit">
        </form>
      <?php
      echo $_get["password"];
      ?>
    </body>
</html>