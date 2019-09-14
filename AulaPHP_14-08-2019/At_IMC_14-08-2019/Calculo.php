<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Seu IMC</title>
</head>

<Body>
    <>
        <?php

        $Altura = $_POST['Altura'];
        $Peso   = $_POST['Peso'];
        $Total  = 0;

        $Total = ($Peso / pow($Altura, 2));
        if ($Total < 18.5) {
            echo "<h1 class = 'text-center text-warning'> Vc está em um estado de magreza :" .round($Total) . "</h1>";
        } elseif ($Total >= 18.5 && $Total < 24.9) {
            echo "<h1 class 'text-center text-success'>Vc está perfeito meu Amigo : " .round($Total). "</br>";
        } elseif ($Total >= 24.9 && $Total < 30) {
            echo "<h1 class 'text-center text-warning'>Sobrepeso, precisa se exercitar mais em Colega : " .round($Total)."<br>";
        } elseif ($Total >= 30) {
            echo "<h1 class 'text-center text-danger'>Obesidade, se fudeu meu amigo : " . round($Total)."<br>";
        }; ?>
</Body>

</html>