<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sesja 2</title>
  </head>
  <body>
    Strona<hr>
    Witamy
    <?php
    echo $_SESSION['name'];
    ?>
    na stronie!<br>
    <?php
    echo "Identyfikator sesji: ",session_id();
     ?>
     <br><a href="./sesja3.php">Sesja 3</a>
  </body>
</html>
