<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" method="post">
      <input type="number" name="ilosc" value="">
      <input type="submit" name="button" value="wyślij">
    </form>
    <form method="post">
    <?php
    function liczba(){
      @$liczba = $_POST['ilosc'];
      for($i = 1; $i <= $liczba; $i++) {
        echo "<input type=\"number\" name=\"$i\"><br>";
      }
      echo "<input type=\"submit\" name=\"button1\" value=\"wyślij\">";
    }
    function wiek(){
      @$liczba = $_POST['ilosc'];
      for($w = 1; $w<=$liczba;$w++) {
        
      }
    }
    echo liczba();
     ?>
   </form>
  </body>
</html>
