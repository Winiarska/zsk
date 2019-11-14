<?php
session_start();
$_SESSION['name'] = "Janusz";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sesja 1</title>
  </head>
  <body>
    Strona startowa<hr>
    Witamy
    <?php
    echo $_SESSION['name'];
    ?>
    na stronie!<br>
    <?php
    echo "Identyfikator sesji: ",session_id();
     ?>
     <br><a href="./sesja2.php">sesja 2</a>
  </body>
</html>
