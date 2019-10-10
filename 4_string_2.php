<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" class="">
      <input type="text" name="name" placeholder="imie" autofocus autocomplete="off">
      <br>
      <input type="submit" name="button" value="wyślij">
      <br>
    </form>
    <?php
    if (isset($_POST['name'])) {
      $name= $_POST['name'];

      //zmiana na lowercase
      echo strtolower($name),'<br>';
      //zmiana na uppercase
      echo strtoupper($name),'<br>';
      //zmiana pierwszej litery na dużą
      echo ucfirst($name),'<br>';
      //zmiana wszystkich liter na duże
      echo ucwords($name),'<hr>';

      ////////////////
      $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
      echo $lorem,'<hr>';
      $col= wordwrap($lorem, 40, '<br>');
      echo $col;

      //czyszczenie zawartości bufora
      ob_clean();

    }

    //sanityzacja kodu (usuwanie białych znaków)
    $text = 'Janusz';
    $text1 = '  Janusz ';

    echo 'Długość zmiennej $text: ', strlen($text),'<br>';
    echo 'Długość zmiennej $text1: ', strlen($text1),'<hr>';

    echo strlen(ltrim($text1)),"<br>"; //usunęło 2 białe znaki z przodu
    echo strlen(rtrim($text1)),"<br>";
    echo strlen(trim($text1)),"<hr>";

    //przeszukiwanie ciągów znaków
    $address = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
    $search = strstr($address,'tel');
    echo $search, '<hr>';

    $address = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
    $search = strstr($address,'tel', true); //wyświetla to co jest przed tel
    echo $search, '<hr>';

    $address = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
    $search = stristr($address,'Tel'); //stristr ignoruje duże litery
    echo $search, '<hr>';

    $mail = strstr('zsk@gmail.com', '@'); //przydatne jak szukamy w jakich domenach klienci mają pocztę czy coś tam
    echo $mail,'<hr>';

    //pozycja
    $pozycja = strpos('abcdefg','cde'); //pozycja w której jest podane cde
    echo $pozycja,'<br>';

    $pozycja = strpos('abcabcabc','ab');
    echo $pozycja,'<br>'; //pokazuje pierwszą pozycje gdzie jest ab

    /* Sprawdź czy w ciągu o nazwie text1 znajduje się ciąg text2
    */
    $text1 = 'abcdab';
    $text2 = 'ab';
    if(strpos($text1,$text2) === false) { //trzeba dać dodatkowe = bo inaczej interpretuje 0 jako false
      echo 'Ciąg $text2 nie zawiera się w ciągu $text1',"<hr>";
    } else echo 'Ciąg $text2 zawiera się w ciągu $text1',"<hr>";

    //przetwarzanie ciągów znaków
    $replace = str_replace('zsk','***','zsk - Zespół Szkół Komunikacji');
    echo $replace,'<hr>';

    //substr
    echo substr('Janusz Kowalski', 3),"<br>"; //usz Kowalski
    echo substr('Janusz Kowalski', -3),"<br>"; //ski
    echo substr('Janusz Kowalski', -8, 5),"<br>"; //kowal
    echo substr('Janusz Kowalski', 7, 5),"<hr>"; //kowal

    //zamiana polskich znaków
    $login = "żółć";
    $censore = array('ą','ę','ś','ż','ź','ó','ń','ł','ć');
    $replace = array('a','e','s','z','z','o','n','l','c');

    $newlogin = str_ireplace($censore,$replace,$login);
    echo $login,'<br>';
    echo $newlogin,'<hr>';

    ob_clean();
    //napisz apke cenzurującą zdanie podane przez użytkownika , użytkownik podaje dane w formularzu
    //zamień słowa biały czarny na ciąg znakow '#####'
    //wyświetl dane w formacie:
    //Dane przed poprawą:
    //Dane po poprawie:

    if (!empty($_POST['text'])) {
      $text = $_POST['text'];
      $cenzura = array("biały","czarny");
      $replace = array("#####","######");
      $newtext = str_ireplace($cenzura,$replace,$text);

      echo "Dane przed poprawą: ",$text,"<br>";
      echo "Dane po poprawie: ",$newtext,"<br>";
    } else {

     ?>
     <form method="post" class="">
       <input type="text" name="text" placeholder="Wpisz dane" autofocus autocomplete="off">
       <br>
       <input type="submit" name="button" value="Wyślij">
       <br>
     </form>
   <?php } ?> <!-- to tutaj jeśli formularz jest pusty -->
  </body>
</html>
