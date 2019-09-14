<?php 
include_once('~/../conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Login do funcionário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card card-register mx-auto col-8 px-0">
            <div class="card-header bg-primary"><h1>Pesquisar Professor</h1></div>
            <div class="card-body">
                <form action="Verificação_Usu.php" method="POST">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-12">
                                <label for="Informação">Nome ou CPF que deseja Alterar ou Excluir</label>
                                <input type="text" name="nome_cpf" class="form-control" placeholder="Digite o Nome Comopleto ou CPF do professor">
                                </div>
                                <div>
                                <button class="btn btn-secondary mt-3 btn-block">Procurar Professor</button>
                                 </div>     
                </form>
            </div>
        </div>
    </div>      
</body>
</html>