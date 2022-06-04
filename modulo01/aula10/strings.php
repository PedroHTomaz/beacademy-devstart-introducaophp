<?php

//Funcoes nativas para editar a fonte da string.

$nome = 'alessandro'; //Alessandro
$sobrenome = 'FEITOZA'; //Feitoza

$nome2 = 'chiquim da silva'; //Chiquim Da Silva

echo "Nome: " . ucfirst($nome) . PHP_EOL;

echo "Sobrenome: " . ucfirst(strtolower($sobrenome)) . PHP_EOL;

echo "Nome 2: " . ucwords($nome2);