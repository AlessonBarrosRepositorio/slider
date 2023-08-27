<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname ="alessonslider";
$port ="3306";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname=". $dbname,$user,$pass);
}catch(PDOException $e){
    echo "erro: conexão com banco de dados não realizado com sucesso. Erro gerado". $err->getMessage();
}