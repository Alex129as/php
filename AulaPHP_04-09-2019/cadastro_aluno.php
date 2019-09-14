<?php
    include("conexao.php");

    $cpf=$_POST['cpf'];
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $complemento=$_POST['complemento'];
    $cep=$_POST['cep'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $telefone=$_POST['telefone'];


    $sql="INSERT INTO aluno (cpf, nome, endereco, cidade, estado, telefone, cep, bairro, complemento)
        VALUES ('$cpf', '$nome', '$endereco', '$cidade', '$estado', '$telefone', '$cep', '$bairro', '$complemento')";
    if(mysqli_query($conexao, $sql)){
        echo "<h1>Aluno cadastrado com sucesso</h1>";
        echo "<a href='cadastro_aluno.html'>Cadastrar novo aluno?</a><br>";
        echo "<a href='index.html'>Página inicial</a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>