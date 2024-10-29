<?php
$host="localhost";
$db="naecassje";
$user="root";
$password="1234";
try{
    $con=new PDO("mysql:host=$host;dbname=$db",$user,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "conexao bem-sucedida!";


}catch(PDOException $e){
    die("Erro ao conectar ao banco de dados!!!".$e->getMessage());
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);