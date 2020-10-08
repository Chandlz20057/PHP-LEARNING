<?php

function fibonacci(){
    $num1 = 0;
    $num2 = 1;

    for ($i=0; $i <= 12;){
        $num1 = $num1 + $num2;
        $num2 = prev($num1);
    }
    echo $num1;
}

fibonacci();
