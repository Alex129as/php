<?php
    include("conexao.php");

    $nome_curso=$_POST['nome_curso'];
    $duracao=$_POST['duracao'];
    $coordenador=$_POST['coordenador'];
    $nivel=$_POST['nivel'];
    $modalidade=$_POST['modalidade'];

    $sql="INSERT INTO curso(nome_curso, duracao, coordenador, nivel, modalidade)
        VALUES ('$nome_curso', '$duracao', '$coordenador', '$nivel', '$modalidade')";

    if(mysqli_query($conexao, $sql)){
        echo "<h1>Curso cadastrado com sucesso</h1>";
        echo "<a href='cadastro_curso.php'>Cadastrar um novo curso?</a><br>";
        echo "<a href='index.html'>Página inicial</a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);

?>