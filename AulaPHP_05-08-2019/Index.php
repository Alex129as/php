<?php 

    echo "<h1>OI</h1><br>";
    $num = 50;
    $num2 = 40;
    $soma = $num + $num2;
   
    echo "<h2>A soma de ".$num ." + ".$num2 ." é : " .$soma ."</h2><br>";

    $Idade = 17;

    if($Idade<18){
        
        echo "<h2>Você é menor de Idade. Sua idade Correspondente é : " .$Idade ."</h2>";

    }else{

        echo "<h2>Parabéns você pode fazer habilitação</h2>";

    }    


    for ($i = 1; $i <= 100; $i++) {

        echo $i ."<br>";

    }
?>