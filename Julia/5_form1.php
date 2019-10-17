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
     ?>
     <form method="get">
       <input type="text" name="name" placeholder="Podaj imię"><br><br>
       <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
       <input type="submit" name="button" value="Zatwierdź">
     </form>
   <?php } ?>
  </body>
</html>
