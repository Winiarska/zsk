<?php
function value($a){
if($a < 0 ) {
  return "ujemna";
} else if($a == 0) {
  return "zero";
} else {
  return "dodatnia";
}

}

echo value(4.34),"<br>";
echo gettype(value(4)),"<br>";
function getValue():int {
  return 10.55;
}
echo getValue(),"<br>";
echo gettype(getValue()),"<hr>";

//zasięg zmiennych
$x = 10;
function Show(){
  echo "Wartość zmiennej \$x wynosi: ";
  echo $GLOBALS['x'],"<br>";
  //lub
  echo "Wartość zmiennej \$x wynosi: $GLOBALS[x]","<br>";
}
echo Show();
function Show1(){
  global $x;
  echo "Wartość zmiennej \$x wynosi: $x","<br>";
}
echo Show1(),"<hr>";

#####################################################

function sum(){
  $liczba = 10;
  echo "\$liczba wynosi: $liczba<br>";
}
sum(); //10
sum(); //10
echo "<hr>";
//funkcja statyczna

function sum1(){
  static $liczba = 10;
  echo "\$liczba wynosi: $liczba<br>";
  $liczba += 10;
}
sum1(); //10
sum1(); //20
sum1(); //30
echo "<hr>";

//argumenty
function add($x, $y = 1){
  return $x + $y;
}
$z = 20;
echo add(2),"<br>"; //3
echo add(2.5, 2),"<br>"; //4.5
echo add($z),"<hr>"; //21

//argumenty i typy danych
function multi(float $x, int $y) {
  return $x * $y;
}
echo multi(3,4),"<br>"; //12
echo multi(3.5,2),"<br>"; //7
echo multi(2,3.5),"<br>"; //6 ale cwelowo ok


 ?>
