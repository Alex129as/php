<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Minha calculadora</title>
  </head>
  
<body class="bg-dark text-light text-center">
<?php
    $x=$_POST["num1"];
    $y=$_POST["num2"];
    $opcao=$_POST["opcao"];
    switch($opcao)
    {
        case "som":
            $resultado=$x+$y;
            echo "A soma é ".$resultado;
            break;
        case "sub":
            $resultado=$x-$y;
            echo "A subtração é ".$resultado;
            break;
        case "mul":
            $resultado=$x*$y;
            echo "A multiplicação é ".$resultado;
            break;
        case "div":
            $resultado=$x/$y;
            echo "A divisão é ".$resultado;
            break;
    }
?>
</body>
</html>