<?php

$X      = $_POST['X'];
$Result = 0;

if ($X % 2 == 0) {
    $Result = $X / 2;
    echo "O seu número tem como valor " . $X . " ele é PAR <br> 
        " . "agora tem como valor de : " . $Result;
} else {
    $Result = (3 * $X) + 1;
    echo "O seu número tem como valor " . $X . " ele é ÍMPAR  <br> 
        " . " agora tem como valor de : " . $Result;
}
