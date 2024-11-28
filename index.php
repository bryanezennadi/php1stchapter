<?php
//una pagina per il tcp e l'architettura serverclient, una per la pila iso osi ed una per le socket
echo "ciao mondo";           // no funzione ma costrutto
//istruzioni e dati
// possono essere integer, float/double/realnumber boolean, string
$count=10;
$list_price = 14.3;
$first_name = 'BOB';
$first_name2 = "Alice";
$is_valid = true;
$microwave = 3.9e-12;
/*echo '<br>';
echo PHP_INT_MAX;   //massimo numero intero     //segno mantissa esponente
echo '<br>';
echo PHP_INT_MIN; //minimo intero
*/
//costanti
const PIGRECO= 3.141516;
//ciao 28/11/2024
$myvar = "sono una variabile";
echo"<br>";
echo $myvar;
echo"<br>";
$myvar= 5;          //php è un linguaggio debolmente tipizzato, non serve dichiarare il tipo di variabile quando la utilizzo
echo $myvar;        //posso inserire informazioni di tipo diverso nella stessa variabile
echo"<br>";
$a = 1;
$b = "3";
echo"<br>";
if($a == $b){       //con == fa una type conversion, la stringa 0 diventa intero e li vede uguali, con === li vede diversi perchè confronta anche il tipo
    echo "sono uguali";
    echo"<br>";
}
else{
    echo "sono diversi";
    echo"<br>";
}
//isset(nomevar) - empty(nomevar) - isnull(nomevar)
if(isset($a)){
    echo"la variabile esiste";
    echo"<br>";
}
if(empty($b)){
    echo "la variabile è vuota";
    echo"<br>";
}
else{
    echo "c'è un valore nella variabile";
    echo"<br>";
}
if(is_null($b)){
    echo "la variabile è nulla";
    echo"<br>";
}
else{
    echo "la variabile non è nulla";
    echo"<br>";
}

//si può fare il while, do-while, for, break, if, if else, switch
$grade = "j";
$message = match($grade){
    "a" => "letter a",
    "b" => "letter b",
    "c", "d" => "letter c e d",
    default => "altre lettere"
};
echo $message;
$total = 0;
$subtotal = 200;
$discount = match(true){
    $subtotal <=200 => $total = $subtotal*0.9,
    $subtotal >200 => $total = $subtotal*0.8
};
echo"<br>";
echo $total;
$num1 = 100;
$num2 = 200;
$num1>$num2 ? $r = "ok" : $r= "ko";
echo"<br>";
echo $r;
$num0 = null;
//coalescing operator
$num3 = $num0 ?? $num2; //se la prima è null prende il valore della seconda, altrimenti prende il valore della prima
echo"<br>";
echo $num3;
echo"<br>";
echo $num0;
//spaceship operator
echo $num2<=>$num1; //verificare quale numero è più grande, se sono uguali da 0
?>
<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<h1> <//?php echo $var1?></h1> il browser non conosce php, il codice php viene fatto dal server

</body>
</html>-->