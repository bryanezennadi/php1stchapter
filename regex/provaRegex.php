<?php
// $pattern = '#abc#'; pattern normale
// $subject = 'abcd'; trovata
//$subject = 'abgasagsacd'; non trovata
$pattern2 = '#^abc#'; //solo se inizia per abc
$subject = 'afagagsaabc';
if(preg_match($pattern2, $subject)){
    echo 'sequenza trovata';
}
else{
    echo 'sequenza non trovata';
}
?>