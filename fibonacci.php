<?php

function fibonacci($until) {
    $num1 = 0;
    $num2 = 1;
    
    for ($i = 0; $i <= $until; $i++) {
        if ($num1 === 0) {
            echo '1 <br />';
        }

        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;

        echo "{$num3} <br />";
    }
}

fibonacci(12);
