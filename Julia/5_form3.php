<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  method="post">
      <input type="text" name="name" placeholder="Podaj imię" autofocus><br><br>
      <input type="radio" name="country" value="p" checked>Polska
      <input type="radio" name="country" value="u">USA
      <input type="radio" name="country" value="n">Niemcy<br><br>
      <textarea name="note" rows="8" cols="40" placeholder="Podaj opis..."></textarea><br>
      <input type="submit" name="button" value="Zatwierdź">
    </form>
    <?php
    if(!empty($_POST['name']) && !empty($_POST['country']) && !empty($_POST['note'])) {
      $name = $_POST['name'];
      $country = $_POST['country'];
      $note = $_POST['note'];

      switch ($country) {
        case 'p':
          $country = "Polska";
          break;
        case 'u':
          $country = "USA";
          break;
        case 'n':
          $country = "Niemcy";
          break;
      }
      echo "Imię: ",$name,"<br>kraj: ",$country,"<br>Opis: ",nl2br($note);
        }

     ?>

  </body>
</html>
