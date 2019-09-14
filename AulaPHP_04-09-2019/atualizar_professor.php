<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Página Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
    include("conexao.php");

    $cpf=$_POST['cpf'];
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $telefone=$_POST['telefone'];
    $formacao=$_POST['formacao'];
    $titulacao=$_POST['titulacao'];

    $sql="UPDATE professor SET nome='$nome', endereco='$endereco', 
    cidade='$cidade', estado='$estado', telefone='$telefone', 
    formacao='$formacao', titulacao='$titulacao' WHERE cpf='$cpf'";

    $resultado=mysqli_query($conexao, $sql);
    if($resultado){
        echo "<h1 class='bg-light text-center'>Professor atualizado com sucesso</h1>";
        header("Refresh: 5; url=index.html");
    }
    else{
        echo "<h1>Não foi possível atualizar</h1>";
    }
    mysqli_close($conexao);
?>
</body>
</html>