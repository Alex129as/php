<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pagina de Cadastro do Funcionário</title>
</head>
<body>
  <form method="POST" action="Cad_funcionario.php">
    Código do Funcionário : <input type="text" name="codigo"><br>
    Nome do Funcionário : <input type="text" name="nome"><br>
    Salário de Contribuição : <input type="number" name="salario"><br>
    <input type="submit" name="Cadastrar" value="Incluir"> <br>
  </form>
  <br>
  <form method="POST" action="Pesquisar_Func.php">
    Código do Funcionário : <input type="text" name="codigo"><br>
    <input type="submit" name="Pesquisar" value="Pesquisar"><br>
  </form>
  <br>
  <form method="POST" action="Excluir_Func.php">
    Código do Funcionário : <input type="text" name="codigo"><br>
    <input type="submit" name="Excluir" value="Excluir"><br>
  </form>
  <br>

</body>

</html>