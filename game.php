<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
      <form action="libsgame.php" method="get">
        color:<input type="text" name="color"><br>
        pluralnoun:<input type ="text" name = "plural">
        celebrity : <input type="text" name= "celebrity">
      </form>
      <?php
     $color =$_get["color"];
     $pluralnoun =$_get["plural"];
     $celebrity =$_get["celebrity"];
     echo "Rose are blue<br>";
     echo "vialots are blue<br>";
     echo " are blue<br>";


      ?>
    </body>
</html>