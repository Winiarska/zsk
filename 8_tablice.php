<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $colors = array('Red','Green','Blue');
    $colors[3] = 'Magenta';
    for($i=0;$i<count($colors);$i++) {
      $elem = $i + 1;
      echo "Element $elem: $colors[$i]<br>";
    }
    echo "<hr>";

    //to samo ale w funkcji
    function showArray($tab) {
      for($i=0;$i<count($tab);$i++) {
        $elem = $i + 1;
        echo "Element $elem: $tab[$i]<br>";
      }
    }
    showArray($colors);
    echo "<hr>";

    //foreach
    foreach ($colors as $key => $value) {
      $elem = $key + 1;
      echo "Element $elem: $value<br>";
    }
    echo "<hr>";
    //skrócona wersja
    foreach ($colors as $value) {
      echo "Element: $value<br>";
    }

    $data = array(
      'Imie' => 'Kinga',
      'Nazwisko' => 'Zamrozila',
      'Wiek' => '23',
    );
    echo "<hr>";
    function showArrayAssoc($tab) {
    foreach ($tab as $key => $value) {
      echo $key,": ",$value,"<br>";
    }
  }
    showArrayAssoc($data);
    echo "<hr>";
    echo "Nazwisko: ",$data['Nazwisko'];
    //lub
    echo "<br>Nazwisko: $data[Nazwisko]";
    //lub
    echo "<br>Nazwisko: {$data['Nazwisko']}<br>";
    echo "<hr>";

    //tablice wielowymiarowe
    $student = array(
      array('Katarzyna','Nowak',30),
      array('Anna'),
      array('Paweł','Kowalski'),
    );

    //wyświetlanie dwuwymiarowej foreachem
    function showArray2($tab) {
      foreach($tab as $value){
        foreach($value as $value1) {
          echo $value1,' ';
        }
        echo "<br>";
      }
    }
    showArray2($student);
    echo "<hr>";

    //wyświetlanie dwuwymiarowej forem
    function showArray2for($tab) {
      for($i=0;$i<count($tab);$i++) {
        for($j=0;$j<count($tab[$i]);$j++){
          echo $tab[$i][$j],' ';
        }
        echo "<br>";
      }
    }
    showArray2for($student);

    //tablice trójwymiarowe
    $tablica = array(
      'Anna Nowak',
      array('Paweł'),
      array(array('A1','A2'),'B','C'),
      array('D','E')
    );
    echo "<hr>";
    function showArray3($tab) {
      foreach ($tab as $key => $value) {
        echo '<div style="margin-left:20px">';
        if(is_array($value)) showArray3($value);
        else echo "<p>$value</p>";
        echo "</div>";
      }
    }
    echo showArray3($tablica);
    echo "<hr>";

    //sortowanie
    $tab = array(10, 2, 5, 75, -1, 100);

    function wyswietl($tab) {
      foreach ($tab as $value) {
        echo $value,' ';
      }
      echo "<br>";
    }
    wyswietl($tab);
    //rosnąco
    sort($tab);
    wyswietl($tab);
    //malejąco
    rsort($tab);
    wyswietl($tab);

    $tab = array('katarzyna','Zenona','Anna','paweł');
    wyswietl($tab);
    sort($tab);
    wyswietl($tab); //najpierw pokazuje małe litery
    echo "<hr>";

    //sortowanie asocjacyjnej
    $data = array(
      'Imie' => 'Kinga',
      'Nazwisko' => 'Zamrozila',
      'Wiek' => '23',
    );
    asort($data);
    showArrayAssoc($data);
    echo "<hr>";

    arsort($data);
    showArrayAssoc($data);
    echo "<hr>";

    ksort($data);
    showArrayAssoc($data);
    echo "<hr>";

    krsort($data);
    showArrayAssoc($data);
    echo "<hr>";

    //wyświetlanie danych z tablicy
    var_dump($data);
    echo "<br>";
    print_r($data);
    echo "<br>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    ?>
  </body>
</html>
