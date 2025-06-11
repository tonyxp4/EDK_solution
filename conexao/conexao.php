<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$usuario = "tonyxp4";
$senha = "543216";
$banco = "escolink";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error){
    die("Erro na conexão: " . $conn->connect_error);
}
?>
