<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //zmienne super globalne

    // $_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

    echo $_SERVER['SERVER_PORT'],'<br>'; //80
    echo $_SERVER['SERVER_NAME'],'<br>'; //127.0.0.1
    echo $_SERVER['SCRIPT_NAME'],'<br>';
    echo $_SERVER['SERVER_PROTOCOL'],'<br>';
    echo $_SERVER['DOCUMENT_ROOT'],'<br>';

    $localfile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME']; //konkatenacja do wyświetlenia całej ścieżki
    echo $localfile,'<br>';

    //lub
    $localfile1 = $_SERVER['DOCUMENT_ROOT'];
    $localfile1 .= $_SERVER['SCRIPT_NAME'];
    echo $localfile1,'<br>';

    //stałe
    //nazwy stałych z dużych liter!!!!
    define('NAZWISKO','Kowal');
    echo NAZWISKO,'<br>';

    define('nazwisko','kowal');
    echo nazwisko,'<br>';

    define('IMIE','Janusz', true); //od wersji jakiejś tam brak 3. argumentu
    echo imie,'<br>'; //gdyby nie true to nie wyświetlenia

    //stałe predefiniowane

    echo PHP_VERSION,'<br>';
    echo gettype(PHP_VERSION),'<br>';

    if(PHP_VERSION > 5.6) {
      echo 'Nowa wersja PHP','<br>';
    } else {
      echo 'Stara wersja PHP','<br>';
    }

    echo PHP_OS,'<br>'; //WINNT
    echo __LINE__,'<br>';
    echo __FILE__,'<br>';
    echo __DIR__,'<br>';

    //dołączanie pliku php
    


     ?>

  </body>
</html>
