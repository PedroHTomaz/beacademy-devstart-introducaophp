<?php


//Aula 35 de Introducao ao PHP - Funcoes nativas.

$notasCursoA = [
    10,
    9,
    9.5,
    7,
];

$notasCursoB = [
    8,
    9.4,
    5,
    6,
];

function mediaDeNotas(array $notas): float 
{
    $total = array_sum($notas);
    $quantidade = count($notas);

    /*
    foreach ($notas as $cadaNota) {
        $total += $cadaNota;
        $quantidade++;
    }
    */

    return $total / $quantidade;
}