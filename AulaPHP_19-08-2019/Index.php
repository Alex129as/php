<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <div class="container">
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Cadastro de Produtos</div>
                </div>  
                <div class="panel-body" >
                    <form method="post" action="DAO_Produtos.php">
                        <div class="form-group">
                            <label for="nome" class="control-label col-md-4"> Descrição </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md  textinput textInput form-control" name="Desc_Produto" placeholder="Digite a Descrição do seu Produto..." style="margin-bottom: 10px" type="text">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="idade" class="control-label col-md-4"> Preço:</label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md  textinput textInput form-control" name="Preco_Produto" placeholder="Digite o Preço do seu Produto..." style="margin-bottom: 10px" type="text">
                                </div>
                        </div>    
                        </div>
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                                <div class="controls col-md-8 ">
                                    <button class="btn btn-info btn-block">Cadastrar</button>
                                </div> 
                    </form>
                </div>
            </div> 
        </div>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>            
</body>
</html>