<?php

function fibonacci(){
    $num1 = 0;
    $num2 = 1;

    for ($i=0; $i <= 12; $i++){
        $num3 = $num1 + $num2;

        echo $num3;
     
        $num1 = $num2;
        $num2 = $num3;
    }
}

fibonacci();
