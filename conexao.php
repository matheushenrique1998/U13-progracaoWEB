<?php

$host ="localhost";
$dbname = "biblioteca";
$username ="root";
$password ="senac2023";
try{
       $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
       $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       echo"conexão com o banco de dados foi estabelecida!";
}catch(PDOException $e){
echo"erro na conexão com o banco de dados:".$e->getMessage();
}