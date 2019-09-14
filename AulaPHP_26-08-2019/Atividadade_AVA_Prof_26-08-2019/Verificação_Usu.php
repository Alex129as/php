<?php 
include_once('~/../conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Dados do Professor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<Body>
     <?php
          $Nome = $_POST['nome_cpf'];
          $NomeC = $_POST['nome_cpf'];
          $sqli = mysqli_query($conexao,"SELECT * FROM professor WHERE nome = '$Nome' or cpf = '$NomeC'");
          $row_prof = mysqli_fetch_assoc($sqli);
          $Resu = mysqli_num_rows($sqli); 
          if ($Resu > 0) {
            ?>
<div class="container">
        <div class="card card-register mx-auto col-6 px-0">
            <div class="card-header bg-success text-light">Editar dados de <?php echo $row_prof['nome']?> </div>
            <div class="card-body">
                <form action="update.php" method="POST">
                    <div class="form-group">
                        <div class="form-row">
                        <div class="col-12">
                                <label for="Nome">Nome completo</label>
                                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome completo" value="<?php echo $row_prof['nome']?>">
                            </div>
                                <div class="col-12">
                                <label for="endereco">Endereço</label>
                                <input type="text" name="endereco" class="form-control" placeholder="Digite seu endereço" value="<?php echo $row_prof['endereco'];?>">
                            </div>
                            <div class="col-6">
                                <label for="cidade">Cidade</label>
                              <input type="text" name="cidade" class="form-control"placeholder="Digite sua cidade" value="<?php echo $row_prof['cidade'];?>">
                          </div>
                          <div class="col-6">
                              <label for="estado">Estado</label>
                              <select name="estado" class="form-control">
                                  <option value="<?php echo $row_prof['estado']?>"><?php echo $row_prof['estado']?></option>
                                  <option value="AC">Acre</option>
                                  <option value="AL">Alagoas</option>
                                  <option value="AP">Amapá</option>
                                  <option value="RO">Rondônia</option>
                              </select>
                          </div>
                          <div class="col-12">
                              <label for="telefone">Telefone</label>
                              <input type="text" name="telefone" class="form-control"placeholder="Digite seu telefone" value="<?php echo $row_prof['telefone'];?>">
                          </div>
                          </div>
                    <br>      
                    <button class="btn btn-primary btn-block">Atualizar dados</button>
                    <div class="text-center">
                        <a href="index.html" class="d-block mt-3">Página inicial</a>
                    </div>
                    <br>
                </form>
                <form action="Delete.php" method="Post">
                    <input type="hidden" name="nome" value="<?php echo $row_prof['nome'];?>">
                    <button class="btn btn-danger btn-block">Apagar Dados</button> 
                </form>   
            </div>
        </div>
    </div>      
                       <?php 
                        }else{
                            echo "<a href='~/../index.html'><h1>Página Incial<h1></a>";
                          ?>
                          <script>
                            alert('Esse Usário não está Cadastrado');
                            document.write('<a href="'+ document.referrer +'"><h1>Página para procurar Professores</h1></a>') 
                            </script>                          
                             <?php }
                          ?>
</Body>
</html>
      