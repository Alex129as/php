<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];
    $resultado="SELECT * FROM professor WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_professor=mysqli_query($conexao, $resultado);

    while($rows_professor=mysqli_fetch_array($resultado_professor)){
        echo "Nome: ".$rows_professor['nome']."<br>";
        echo "CPF: ".$rows_professor['cpf']."<br>";
        echo "Endereço: ".$rows_professor['endereco']."<br>";
        echo "Cidade: ".$rows_professor['cidade']."<br>";
        echo "Estado: ".$rows_professor['estado']."<br>";
        echo "Formação: ".$rows_professor['formacao']."<br>";
        echo "Titulação: ".$rows_professor['titulacao']."<br>";
    }
?>