<?php 
include('~/../Conexao.php');
$Nome =$_POST['nome'];
$Codigo = $_POST['codigo'];
$Salario = $_POST['salario'];

$sql = "INSERT INTO funcionario(cod_funcionario, nome_funcionario, salario_funcionario) VALUES('$Codigo','$Nome','$Salario')";

if($Conexao -> query($sql) == true){
  echo "<h1>Cadastro feito com Sucesso.</h1>";
  echo "<a href = '~/../Index.php'><h1><--Página Incial</h1></a>";
}else{
  echo "houve um erro no cadastramento.";
  echo "<a href = '~/../Index.php'><h1><-Página Incial</h1></a>";

}
?>