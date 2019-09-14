<?php
$X  = $_POST['X'];
$Y  = $_POST['Y'];
$R  = 0;

#Verificação
if ($X > $Y) {

    for ($i = $Y; $i <= $X; $i++) {
        $R += $i;
    }
    echo "Resultado do calculo dos valores entre " . $X . " e " . $Y . "<br>"
        . "é igual há : " . $R;
} else {
    header('location:Exercicio2_12-08-2019.php');
    echo "prompt('Valor os Valores colocados não seguem a devida Ordem:');";
}
?>
