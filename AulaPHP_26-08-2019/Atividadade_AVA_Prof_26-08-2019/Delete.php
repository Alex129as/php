<?php 
  include_once('~/../conexao.php');
  
  $nome = $_POST['nome'];
  
  $sqli = "DELETE FROM professor WHERE nome = '$nome'";
  $Rs = mysqli_query($conexao,$sqli);
  
  if ($Rs == true) {

    echo "<h1>Dados do Professor Excluídos com Sucesso<h1>";
    echo "<a href='~/../index.html'><h3>Página Incial<h3></a>";
    echo "<a href='~/../Procurar_Prof.php'>Deseja Editar Novo Professor</a>";

  } else {
    echo "<h1 style='danger'> Houve um erro<h1>";
    echo "<a href='~/../index.html'>Pagina inicial</a>";
  }
?>