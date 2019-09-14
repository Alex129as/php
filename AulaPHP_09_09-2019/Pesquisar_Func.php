<?php
include("~/../Conexao.php");

$Codigo = $_POST['codigo'];

$Sql = mysqli_query($Conexao,"SELECT * FROM funcionario WHERE cod_funcionario = '$Codigo'");

if (!$Sql) {
  echo"<h1>Esse funcionário Não existe!</h1>";
  echo "<a href = '~/../Index.php'><h1><--Página Incial</h1></a>";
} else {
  $Row_Func = mysqli_fetch_assoc($Sql);
  echo"<h3>Nome: ".$Row_Func['nome_funcionario']."</h3><br>";
  echo"<h3>Salário: ".$Row_Func['salario_funcionario']."</h3><br>";
  echo "<a href = '~/../Index.php'><h3><--Página Incial</h3></a>";
}

?>