<?php
// $pattern = '#abc#'; pattern normale
// $subject = 'abcd'; trovata
//$subject = 'abgasagsacd'; non trovata
$pattern2 = '#^abc#'; //solo se inizia per abc
$pattern = '#abc$#'; // il $ indica che la stringa finisce, quindi il subject deve finire con abc
$pattern = '#a[123]b#'; //in mezzo ad a e b deve esserci un nomero o 1 o 2 o 3
$pattern = '#a[0-6]*b#'; //in mezzo ad a e b può esserci uno o più numeri da 0 a 6. rimane opzionale
$pattern = '#a[0-6]+b#'; //in mezzo ad a e b DEVE esserci uno o più numeri da 0 a 6.
$pattern= '#home/index/[a-z]+.php#'; // qualsiasi nome del file va bene, basti che sia nella cartella index
$pattern= '#localhost(/[a-z]+){2,5}/#'; //con la {}, si può dire dirifare la cosa di prima fino ad un tot


$subject = 'localhost/home/index/school/services.php';
if(preg_match($pattern, $subject, $matches)){
    
    echo 'sequenza trovata <br>';
    var_dump($matches);
}
else{
    echo 'sequenza non trovata';
}
?>


