<?php

$host="localhost";
$port="";
$user="root";
$senha="root";
$banco="Bibliosfera";
try{
$conn=new PDO('mysql:host='.$host.';port='.$port.';dbname='.
$banco,$user,$senha);
$conn-> setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
}catch(psoException $e){
    echo 'erro' .$e-> getMessage();
}
?>