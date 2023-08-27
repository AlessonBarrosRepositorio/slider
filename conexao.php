<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname ="alessonslider";
$port ="3306";

try{
    //conexão com com a porta
    $conn = new PDO("mysql:host=$host;port=$port;dbname=". $dbname,$user,$pass);

    //conexão sem a porta
    //$conn = new PDO("mysql:host=$host;dbname=$dbname=". $dbname,$user,$pass);
    //echo "conexão bem sucessedida";
}catch(PDOException $err){
    echo "erro: conexão com banco de dados não realizado com sucesso. Erro gerado". $err->getMessage();
}