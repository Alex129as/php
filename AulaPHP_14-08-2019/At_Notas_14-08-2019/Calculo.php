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
  <div class="card">
    <?php

        $Nota1 = $_POST['Nota1'];
        $Nota2 = $_POST['Nota2'];
        $Total  = 0;

        $Total = ($Nota1+$Nota2)/2;

        if ($Total >=60) {
            echo "<h1 class='text-center text-success'> Aprovado : ".$Total."<br>";
        }else {
            echo "<h1 class='text-center text-danger'> Reprovado : ".$Total."<br>";
        }

        ?>
  </div>    
</Body>

</html>