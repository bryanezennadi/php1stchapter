<?php
$language = "php";
$message = "welcome to " .$language;
echo $message;
echo "<br>";
$message2 = "welcome to $language"; //interpolazione
echo "$message2";
echo "<br>";
$count = 12;
$item = "flower";
$message4 = "u have $count ${item}s";
echo $message4;
echo "<br>";
$message5 = <<<MESSAGE
DAVID SEI CRUDO <br>
crudone
MESSAGE; //ti permette di buildare stringhe che vanno a capo, si chiama heredoc
echo $message5;


?>