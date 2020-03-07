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
  echo '$name.$surname';
  
  //heredoc
  
  echo <<<SHOW
  Imię:
  SHOW;
?>
</body>
</html>

