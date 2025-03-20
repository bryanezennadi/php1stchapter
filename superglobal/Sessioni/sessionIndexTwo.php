<?php
if(session_status() == PHP_SESSION_NONE) // se la sessione è none, per gestire lo stato della sessione, in caso la sessione esista già, non la crea e non mostra errori
    session_start(); // inizio sessione, se c'è già una sessione aperta (ma sospesa) la riprende, session_start()genera un id che identifica la sessione, che diventa un cookie e lo passa al browser, quindi la sessione lavora sui cookie


$materia = $_SESSION['materia'];
$scuola = $_SESSION['scuola'];

?>

<!doctype html>
<html lang="\">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>La scuola è <?=$scuola?> e la materia è <?=$materia ?>.</p>
    <p>Nome della sessione: <?= session_name()?></p>
    <p>ID della sessione: <?= session_id()?></p>
</body>
</html>
