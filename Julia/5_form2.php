<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(!empty($_GET['name']) && !empty($_GET['surname']) && isset($_GET['button'])) {
      echo "ok!","<br>";
    } else {
      require('./5_form.php');
    }
     ?>

  </body>
</html>
