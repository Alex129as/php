<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>professores cadastrados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script>
        function Verificar(){
           var excluir = document.getElementsByName('Excluir');
           var res = confirm('Tem certeza que deseja Apagar o Professor ?')
           if( res == true){
            location.href ="Delete.php";
           }
        }   
    </script>
</head>
<body>

    <?php
        include("conexao.php");

        $sql = "SELECT * FROM professor";
        $resultado = mysqli_query($conexao,$sql);

        if(mysqli_num_rows($resultado)>0){
echo "<table class='table'>
        <th>CPF</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Telefone</th>
        <th>Formação</th>
        <th>Titulação</th>
        <th>Outras Ações</th>
        
           </tr> ";
           while ($row=mysqli_fetch_assoc($resultado)){
               echo "</tr><td>".$row['cpf']."</td>";
               echo "<td>".$row['nome']."</td>";
               echo "<td>".$row['endereco']."</td>";
               echo "<td>".$row['cidade']."</td>";
               echo "<td>".$row['estado']."</td>";
               echo "<td>".$row['telefone']."</td>";
               echo "<td>".$row['formacao']."</td>";
               echo "<td>".$row['titulacao']."</td>";
            ?>
             <form action="Verificação_Usu.php" method="POST">
               <input type="hidden"name="nome_cpf" value="<?php echo $row['nome'];?>" >
               <td><Button class="btn btn-primary" type="submit">Editar</Button></td>  
               </form>
               <form action="Delete.php" method="POST" name="forme">
                <input type="hidden"name="nome" value="<?php echo $row['nome'];?>" >
                  <td><input class="btn btn-danger" type="button" value="Deletar" onclick="Verificar();"name="Exluir"></td>
               </form>     
           <?php
            echo"<tr>";
           }
           echo "</table>";}

           else {
            ?>              
             <script>
                alert("Não há nenhum Resultado");
             </script>
            <?php 
       echo "<a href='index.html'><h1><-- Página Inicial</h1></a>";
     }

        mysqli_close($conexao); 

    ?> 
</body>
</html>