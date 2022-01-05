<?php
session_start();
$timerCookie = time() + (60*60);
setcookie('connexion', 'true', $timerCookie);
setcookie('test5', 'true' , 5);
$_SESSION['test'] = '4';
$test = $_COOKIE['connexion'];

$_SESSION["newsession"] = $value ;

$_SESSION["newsession"] = $updatedvalue;



var_dump($test);
?> 
