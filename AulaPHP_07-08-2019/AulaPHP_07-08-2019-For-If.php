<?php 

$soma = 0;

for($i = 50; $i<=100; $i++){ 

  if($i % 2 == 0){

        $soma += $i;
        echo $i ."<br>";    
  }
}
echo "<br>";
echo "A soma dos resultados dos números pares de 50 a 100 é de : " .$soma;

?>