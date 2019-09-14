<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro de curso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <H3 class="shadow-sm p-3 mb-3 bg-light rounded text-center">Preencher dados do curso</H3>
    <div class="col-6 mx-auto shadow p-3 mb-3 bg-light ">
        <form action="cadastro_curso_php.php" method="post">
     
                <div class="input-group mb-3">
                    <label for="">Nome do curso: </label>
                    <input type="text" name="nome_curso" class="form-control">  
                </div>
                <div class="input-group  mb-3">
                    <label for="">Duração: </label>
                    <input type="text" class="form-control" name="duracao">
                    <div class="input-group-append">
                        <span class="input-group-text">meses</span>
                    </div>
                </div>
                <div class="input-group  mb-3">
                    <label for="">Selecione o coordenador: </label>
                    <select name="coordenador" class="form-control">
                        <?php
                            include("conexao.php");

                            $sql="SELECT cpf, nome FROM professor";
                            $resultado=mysqli_query($conexao, $sql);

                            while($row=mysqli_fetch_array($resultado)){
                                echo "<option value='".$row['cpf']."'>".$row['nome'].".</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="input-group  mb-3">
                    <label for="">Nível: </label>
                    <select name="nivel" class="form-control">
                            <option value="">Selecione o nível do curso</option>
                            <option value="tecnico">Técnico</option>
                            <option value="tecnologico">Tecnológico</option>
                            <option value="bacharelado">Bacharelado</option>
                            <option value="licenciatura">Licenciatura</option>
                            <option value="especializacao">Especialização</option>
                    </select>
                </div>
                <div class="input-group  mb-3">
                    <label for="">Modalidade: </label>
                    <select name="modalidade" class="form-control">
                            <option value="">Selecione a modalidade do curso</option>
                            <option value="distancia">À distância</option>
                            <option value="presencial">Presencial</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary form-control  mb-3" value="Enviar"><br>
                <input type="reset" class="btn btn-primary form-control" value="Limpar">
      
        </form>
    </div>
</body>
</html>
