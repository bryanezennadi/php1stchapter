<?php
echo $_POST['name'];
echo $_POST['pwd'];
/* $_get e $_post osno superglbals, variabili globali, visibili a tutti gli script */
//$_SERVER
//$_COOKIE
//$_SESSION
//$_FILES
// $_ENV
//$_REQUEST
ECHO '<BR>';
echo $_SERVER['SERVER_NAME'];
ECHO '<BR>';
echo $_SERVER['SERVER_PORT'];
ECHO '<BR>';
echo $_SERVER['REQUEST_METHOD'];
ECHO '<BR>';
echo $_SERVER['PHP_SELF'];
$url= parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
ECHO '<BR>';
ECHO $url;