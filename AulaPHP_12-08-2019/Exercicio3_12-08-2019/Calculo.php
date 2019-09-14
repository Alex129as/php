<?php 
$X = $_POST['X'];
$T = 0;

for ($i=0; $i <= 10 ; $i++) { 
   $T = $X * $i;
   echo $X." X ".$i." = ".$T."<br>"; 
}
