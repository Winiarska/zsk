<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Początek pliku
    <?php

    /*
    include('./plik.php');
    include_once('./plik.php'); //jak już jest included to nie robi tego kolejny raz
    */

    require('./plik.php');
    require_once('./plik.php'); //tak samo jak include
     ?>
    Zakończenie pliku


  </body>
</html>
