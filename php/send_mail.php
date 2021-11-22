<?php
if (get_magic_quotes_gpc()){
    $from=stripcslashes($_POST['label']);
    $expediteur=stripcslashes($_POST['label']);
    $message=stripcslashes($_POST['textarea']);

}
else{
    $expediteur=$_POST['nom'];
    $message=$_POST['textarea'];



}

$to='marvin.hoguet@gmail.com';
$msg=$message;
$headers ='From'.$expediteur.'>'."\r\n\r\n";


mail($to,$msg,$headers);