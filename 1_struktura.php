<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
<meta charset="utf-8">
<title>Struktura dokuentu</title>
</head>
<body>
<?php
  $name="Janusz";
  $surname="Nowak";
echo "$name $surname";
  
  $text = <<<X
  Imię: $name
  X;
  
  echo $text, "<br>";
  
  $int = 10;
  $hex = 0xA;
  $oct = 012;
  
  echo $int, "<br>";
  echo $hex, "<br>";
  echo $oct, "<br>";
  
  echo phpinfo();
  
?>
</body>
</html>

