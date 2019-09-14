<?php 
include_once("~/../conexao.php");
$Nome =$_POST['nome'];
$Endereco = $_POST['endereco'];
$Cidade = $_POST['cidade'];
$Estado = $_POST['estado'];
$telefone = $_POST['telefone'];

  $update = "UPDATE professor set endereco ='$Endereco',cidade ='$Cidade', estado='$Estado',telefone ='$telefone' WHERE nome = '$Nome'";

   if ($conexao->query($update) == true ) {
     echo "<h1>Dados Atualizados com Sucesso<h1>";
     echo "<a href='~/../index.html'><h3>Página Incial<h3></a>";
     echo "<a href='~/../Procurar_Prof.php'>Deseja Editar Novo Professor</a>";
   } else {
     echo "<h1 style='danger'> Houve um erro<h1>";
     echo "<a href='~/../index.html'>Pagina inicial</a>";
   }
   
?>  