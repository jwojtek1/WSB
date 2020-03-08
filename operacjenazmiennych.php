<?php
$potega=2**10;
echo $potega, "<hr>";

//operatory bitowe
$x=0b1010;
echo $x;
$x=$x>>1;
echo $x;
$x=$x>>2;
echo $x;

//operatory

$x=10;
$y=20;

$result= $x<=>$y;
echo $result, "<hr>";

//równe / identyczne

$x=1;
$y=1.0;

if($x != $y) { echo 'Są różne.'; }

echo gettype($x);
echo gettype($y);

// operatory rzutowania

$text1="123ssd";
$x1 = (int)$text1;
echo $x1, "<br>";
echo gettype($text1);
echo gettype($x1);

$text2 = 0;
$x2 = (bool)$text2;
echo $x2;

$text3= 0;
$x3 = (unset)$text2;
echo $text3;
echo $x3;
echo gettype($text3);
echo gettype($x3), "<hr>";

//rozmiar typu integer
echo PHP_INT_SIZE, "<br>";

//kontrola typu zmiennych
$x=10;
echo is_int($x);
echo is_string($x);
echo is_bool($x);
echo is_float($x);
echo is_null($x);

//operator ignorowania błędów

$w;
echo @$w;
echo gettype($w);

//zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

echo $_Server['SERVER_PORT'], "<br>";
echo $_Server['SERVER_NAME'], "<br>";
echo $_Server['SCRIPT_NAME'], "<br>";
echo $_Server['DOCUMENT_ROOT'], "<br>";

$fileLocal = $_Server['DOCUMENT_ROOT'];
$fileLocal .= $_Server['SCRIPT_NAME'];
echo $fileLocal,"<hr>";

//stałe - nazwy z dużych liter
define('SURNAME', "Kowal");
echo SURNAME;

// stałe predefiniowane
echo PHP_VERSION; //7.3.2
echo PHP_OS; //WINNT
echo __LINE__;
echo __FILE__;
echo __DIR__;



?>
