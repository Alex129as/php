<?php 
$Local = "localhost";
$Username  = "root";
$Password = "";
$Database = "myempresa"; 

$Conexao = mysqli_connect($Local, $Username, $Password, $Database);

if (!$Conexao) {
  die("Houve um erro: ".mysqli_connect_errno());
}
?>