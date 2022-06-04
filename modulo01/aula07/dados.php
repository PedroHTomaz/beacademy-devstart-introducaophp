<?php

//array associativo
//Quando associamos nome a Pedro, ele perde a antiga pos 0. Agora para se referir a Pedro utilizamos 'nome'.
$dados = [
    'nome' => 'Pedro',
    'sobrenome' => 'Tomaz',
    'idade' => 21,
    'cidade' => 'Fortaleza',
    'ano de nascimento' => 2001,
    'cor_preferida' => 'Azul',
];

echo "Nome: " . $dados['nome'] . '<br>';
echo "Cidade: " . $dados['cidade'] . '<br>';

