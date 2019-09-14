<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Alunos cadastrados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php 
        include("conexao.php");
        $sql="SELECT * FROM aluno";
        $resultado=mysqli_query($conexao, $sql);
        if(mysqli_num_rows($resultado)>0){
            echo "<table class='table'>
                  <tr>
                  <th>CPF</th>
                  <th>Nome</th>
                  <th>Endereço</th>
                  <th>Complemento</th>
                  <th>CEP</th>
                  <th>Bairro</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Telefone</th>
                  </tr>";
            while($row=mysqli_fetch_assoc($resultado)){
                echo "<tr><td>".$row['cpf']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['endereco']."</td>";
                echo "<td>".$row['complemento']."</td>";
                echo "<td>".$row['cep']."</td>";
                echo "<td>".$row['bairro']."</td>";
                echo "<td>".$row['cidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td>".$row['telefone']."</td>";
            }
            echo "</table>";
        }
        else{
            echo "Zero Resultado";
        }
        mysqli_close($conexao);
    ?>
</body>
</html>