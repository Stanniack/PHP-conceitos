<?php

    $var = 10;
    $var2 = 11;

    if ($var == 100){
        echo "É igual";
    } else {
        echo "Não é igual";
    }

    echo "<br>";

    if ($var2 == 10) {
        echo "É 10.";
    } elseif ($var2 == 11) {
        echo "É 11.";
    } else {
        echo "Não é 10 e nem 11";
    }

    echo "<br>";

    switch ($var) {
        case 10:
            echo "Testando primeiro case";
            break;
        case 11:
            echo "Testando segundo case";
            break;
        default:
            break;
    }

?>