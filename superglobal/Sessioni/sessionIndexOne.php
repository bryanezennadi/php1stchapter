<?php
//la sessione salva i dati sul server
if(session_status() == PHP_SESSION_NONE) { // se la sessione è none, per gestire lo stato della sessione, in caso la sessione esista già, non la crea e non mostra errori

session_set_cookie_params([
        'lifetime' => 3600,
        'path' =>'/',
        'domain' => '',
        'secure' => 'false',
        'httponly' => 'false'
]);
    session_start(); // inizio sessione, se c'è già una sessione aperta (ma sospesa) la riprende, session_start()genera un id che identifica la sessione, che diventa un cookie e lo passa al browser, quindi la sessione lavora sui cookie
}
$_SESSION['materia']= 'informatica';
$_SESSION['scuola']= 'itis';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Session page</p>
    <a href="sessionIndexTwo.php">Session Index Two</a>
    <p>Nome della sessione: <?= session_name()?></p>
    <p>ID della sessione: <?= session_id()?></p>
</body>
</html>
