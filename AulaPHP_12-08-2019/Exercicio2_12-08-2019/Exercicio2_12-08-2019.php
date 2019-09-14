<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Intermédios</title>
</head>

<body>
    <h1 class="text-center">Intermédios</h1>
    <form action="Calculo.php" method="POST" class="fomr-group col-6 mx-auto">
        <div class="fomr group">
            <label for="X">Digite um Valor qualquer : </label>
            <input type="number" class="form-control" name="X">
            <label for="" class="font-weight-light text-primary">
                Observe que o primeiro número deve ser maior que o Segundo <br>
                Caso contrário terá erro!
            </label>
        </div>
        <div class="form-group">
            <label for="Y">Digite o segundo Valor :</label>
            <input type="number" class="form-control" name="Y">
        </div>
        <button class="btn btn-secondary btn-block">Calcular</button>
        <label for="" class="font-weight-light text-primary">
            Quando clicar em Calcular será feito o calculo dos números<br>
            entre esses dois valores!
        </label>

    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>