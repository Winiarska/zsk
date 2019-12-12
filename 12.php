<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sklep</title>
  </head>
  <body>
    <?php
      //skrypt 1
      $sql = "SELECT `nazwa` FROM `towary` WHERE `promocja`=1";
      $connect = mysqli_connect("localhost", "root", "", "sklep");
      mysqli_set_charset($connect, "utf8"); //polskie znaki
      $result = mysqli_query($connect, $sql);
      echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<li>$row[nazwa]</li>";
        }
      echo "</ul>";

     ?>
      <form method="post">
        <select name="towar">

          <?php
          $sql = "SELECT `nazwa` FROM `towary`";
          $result = mysqli_query($connect, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value=\"$row[nazwa]\">$row[nazwa]</option>";
          }
          ?>

        </select>
        <input type="submit" name="button" value="Wybierz" />
        <input type="submit" name="button2" value="Pokaż tabelę" />
      </form>
     <?php
       if (isset($_POST['towar']) && isset($_POST['button'])) {
       $towar = $_POST['towar'];

       //echo $towar;

        //$sql = "SELECT `cena` FROM `towary` WHERE `nazwa`=\'$towar\'";
        $sql = "SELECT * FROM `towary` WHERE `nazwa`='$towar'";
        $connect = mysqli_connect("localhost", "root", "", "sklep");
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row['promocja'] == 1) {
          $promotion = round($row['cena']*0.85,2);
        } else {
          $promotion = $row['cena'];
        }
        echo $promotion;
      }
        ?>


        <?php
        if (isset($_POST['button2'])) {
        $sql = "SELECT * FROM `towary`";
        $result = mysqli_query($connect, $sql);
        echo "<table><row><td>Nazwa</td><td>Cena</td><td>Promocja</td>";
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>$row[nazwa]</td>";

          echo "<td>$row[cena]</td>";
          echo "<td>";
          if ($row["promocja"] == 1) {
            echo "Promocja";
          }
          else {
            echo "Brak promocji";
          }
          echo "</td>";
          echo "</tr>";

        }
        echo "</table>";
        mysqli_close($connect);
      }
     ?>
  </body>
</html>
