<?php

$number = 10;

/*
if ($number > 0) {
    echo "Positivo";
} else {
    if ($number < 0) {
        echo "Negativo";
    } else {
        echo "Nulo";
    }
}
*/

if ($number > 0) {
    echo "Positivo";
} elseif ($number < 0) {
    echo "Negativo";
} else {
    echo "Nulo";
}