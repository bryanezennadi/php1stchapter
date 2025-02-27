<?php
//le sessioni sono diverse dal cookie perchè non sono salvate nel computer. le sessioni servono a salvare informazioni in variabili
// da usare in pagine differenti
echo 'session';
session_start();//parte la sessione se non esisteva, ma se ce n'è una aperta ma sospesa la fa riprendere
$_SESSION['materia'] = 'informatica'; //la superglobal è unarray associativo
$_SESSION['scuola'] = 'itis';
?>
<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mentality</title>
</head>
<body>
<p>session page</p>
<a href="Index2.php">cliccami</a>
<br>
<P> <?= session_name() ?></P>
<br>
<p> <?= session_id() ?></p>

<!-- se si cancella il cookie dal browser, il server ne cheide uno nuovo, però nel tmp si salvano entrambe
 se l'utente disabilita i cookies si può decidere di salvare il cookie di sessione nell'url
 session injection
 -->
</body>
</html>
