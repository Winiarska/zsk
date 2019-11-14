<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body>
    <?php
    setcookie("age",20,time()+60); //ciasteczko na 60 sekund
    setcookie("age","",time()-1);
    echo $_COOKIE['age'];

    
     ?>
  </body>
</html>
