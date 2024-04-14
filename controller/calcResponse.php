<?php
session_start();
$responses = $_SESSION['response'];
$score = 0;
if($responses[0] == 'a'){
    $score++;
}
if($responses[1] == 'd'){
    $score++;
}
if($responses[2] == 'c'){
    $score++;
}
if($responses[3] == 'c'){
    $score++;
}
if($responses[4] == 'b'){
    $score++;
}
if($responses[5] == 'd'){
    $score++;
}
require_once 'banco.php';
$banco = new banco();
$sql = 'INSERT INTO score VALUES (null,"'.$_SESSION['name'].'",'.$score.');';
$banco->Conectar();
$banco->Executar($sql);
$banco->Desconectar();

$_SESSION['score'] = $score;

header('location:../final.php');