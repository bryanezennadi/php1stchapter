<?php
 require_once "Persona.php"; //viene preso il codice dal file Persona.php
$persona1 = new Persona("Alice", 25, "alice@gmail.com");
echo $persona1->getName();