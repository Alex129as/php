<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Matrícula de curso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <H4 class="shadow-sm p-3 mb-3 bg-light rounded text-center">Selecione o aluno e o curso</H4>
    <div class="col-4 mx-auto shadow p-3 mb-3 bg-light ">
        <form action="cadastro_matricula.php" method="post">
                <div class="mb-3">
                    <label for="">Selecione o aluno </label>
                    <select name="aluno" class="form-control">
                        <?php
                            include("conexao.php");

                            $sql="SELECT cpf, nome FROM cad_aluno";
                            $resultado=mysqli_query($conexao, $sql);

                            while($row=mysqli_fetch_array($resultado)){
                                echo "<option value='".$row['cpf']."'>".$row['nome'].".</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Selecione o curso </label>
                    <select name="curso" class="form-control">
                        <?php
                            include("conexao.php");

                            $sql="SELECT id_curso, nome_curso FROM curso";
                            $resultado=mysqli_query($conexao, $sql);

                            while($row=mysqli_fetch_array($resultado)){
                                echo "<option value='".$row['id_curso']."'>".$row['nome_curso'].".</option>";
                            }
                        ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary form-control  mb-3" value="Enviar"><br>
                <input type="reset" class="btn btn-danger form-control mb-3" value="Limpar">
                <a href="index.html" class="btn btn-primary btn-block ">Voltar</a>
      
        </form>
    </div>
</body>
</html>
