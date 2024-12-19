<?php
 require_once "Persona.php"; //viene preso il codice dal file Persona.php
 require_once "Studente.php"; //viene preso il codice dal file Persona.php
require_once "Volounteer.php";
require_once "Teacher.php";
$persona1 = new Persona("Alice", 25, "alice@gmail.com");
echo $persona1->getName();
echo "<hr>";
echo $persona1 ->getAge();
echo "<hr>";
echo $persona1 ->getEmail();
echo "<hr>";
echo $persona1 ->introduce();
$s1 = new Studente("Martina", "17", "MM@gmail.com", "ITIS viola marchesini");
echo "<hr>";
echo $s1 -> studentIntroduction();
echo "<hr>";
echo $s1 -> toDo();
$t1 = new Teacher("Filippo", "Gasparini");
$t2 = new Teacher("Emiliano", "Spiller");
$t3 = new Teacher("Sara", "Romagnolo");
echo "<hr>";
echo Teacher::getRegister();