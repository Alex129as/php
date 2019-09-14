<?php 

$Altura = $_POST['Altura'];
$Sexo   = $_POST['Sexo'];
$Total  = 0;

switch($Sexo){

    case "Masculino":
        $Total = ($Altura-100)*0.90;
        echo "<h1>Seu Peso é de : " .$Total;
        break;
    case 'Feminino':
        $Total = ($Altura-100)*0.85;
        echo "Seu Peso é de : </h1>" .$Total;
        break;    

}
?>