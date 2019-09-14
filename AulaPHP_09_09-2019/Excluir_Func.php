<?php  
include("~/../Conexao.php");

$Codigo = $_POST['codigo'];

$Sql = "DELETE FROM funcionario WHERE cod_funcionario = '$Codigo'";

if ($Conexao -> query($Sql)) {
  echo "<h1>Deletado com Sucesso.</h1>";
  echo "<a href = '~/../Index.php'><h1><--Página Incial</h1></a>";
}else{
  echo "<h1>houve um erro no cadastramento</h1>";
  echo "<a href = '~/../Index.php'><h1><--Página Incial</h1></a>";

}

?>