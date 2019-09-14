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

    $sql="INSERT INTO professor(cpf, endereco, cidade, estado, telefone, formacao, titulacao, nome) VALUES ('$cpf','$endereco', '$cidade', '$estado', '$telefone', '$formacao', '$titulacao','$nome');";
    
    if(mysqli_query($conexao, $sql)){
        echo "<h1>Professor cadastrado com sucesso</h1>";
        echo "<a href='cadastro_professor.html'>Cadastrar novo professor?</a><br>";
        echo "<a href='index.html'>Página inicial</a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>