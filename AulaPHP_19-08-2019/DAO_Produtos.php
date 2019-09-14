<?php 
include('Connection.php');

$Desc_Produto  = $_POST['Desc_Produto'];
$Preco_Produto = $_POST['Preco_Produto'];

$Insert = "INSERT INTO cad_produtos(Desc_Produto, Preco_Produto) 
           VALUES ('$Desc_Produto', '$Preco_Produto')";

if (mysqli_query($Connect, $Insert)) {
  echo "<script> alert(Cadastrado com Sucesso)<script>";
  header('location:Index.php');
} else {
  echo "erro";
}

?>