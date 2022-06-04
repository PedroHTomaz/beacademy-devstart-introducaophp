<?php
/*

declare(strict_types=1);

function soma (int $n1, int $n2) {
    return $n1 + $n2;
}

echo soma(10, 90);

*/

/* Funcao normal, sem strict types.

function welcome($nome) {
    return "Bem vindo, {$nome}!";
}

*/

//Funcao com strict types mas sem retorno tipado
/*
declare (strict_types=1);

function welcome(string $nome) {
    return "Bem vindo, {$nome}!";
}
*/

//funcao com strict types e com retorno tipado
//Isso tudo deixa nosso código mais fechado para receber e trabalhar apenas com os dados certos.

/*
declare (strict_types=1);

function welcome(string $nome): string 
{
    return "Bem vindo, {$nome}!";
}
*/

//E quando a funcao não tem retorno? Colocamos a palavra "void", que significa que a funcao não tem retorno e o que ela faz fica dentro do escopo dela.


/*
declare (strict_types=1);

function welcome(string $nome): void 
{
    echo "Bem vindo, {$nome}!";
}

*/