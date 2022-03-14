<?php
$text = <<<SCHOOL
  ZSŁ - Zespół Szkół Łączności
  <br>
SCHOOL;

  echo "$text<br>";
  echo nl2br($text);

  $name="jANusZ";
  echo "$name<br>";
  echo strtolower($name);
  echo "<br>";
  echo strtoupper($name);
  $surname = "bąk";
  echo "<br>";
  echo strtoupper($surname);
  echo "<br>";
  echo mb_strtoupper($surname);
  $text = "jANusZ koWAlsKi";
  echo $text;
  echo "<br>";
  echo mb_strtolower($text);
  echo "<br>";
  echo ucfirst(mb_strtolower($text));
  echo "<br>";
  echo ucwords(mb_strtolower($text));
 ?>
