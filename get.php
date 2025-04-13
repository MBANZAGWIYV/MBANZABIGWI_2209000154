<!DOCTYPE html>
<html lang="en">
    <head>
        <title>GET </title>
    </head>
    <body>
        <form action ="post.php" method ="get">
        password:<input type ="password" nam="pass">
        <input type ="submit">
        </form>
      <?php
      echo $_get["password"];
      ?>
    </body>
</html>