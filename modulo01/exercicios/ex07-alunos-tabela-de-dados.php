<?php

$a1 = [
    'nome' => 'Luan',
    'email' => 'luan@email.com',
    'telefone' => '85 9 8887 8856',
    'notas' => [
            9.5,
            7.5,
            8.0,
            9.0,
        ]
];

$a2 = [
    'nome' => 'Pedro',
    'email' => 'pedro@email.com',
    'telefone' => '85 9 8800 0088',
    'notas' => [
            9.5,
            7.5,
            8.0,
            9.0,
        ]
];

$a3 = [
    'nome' => 'Marcelo',
    'email' => 'marcelo@email.com',
    'telefone' => '85 9 8874 0088',
    'notas' => [
            9.5,
            7.5,
            8.0,
            9.0,
        ]
];

$a4 = [
    'nome' => 'Gui',
    'email' => 'gui@email.com',
    'telefone' => '85 9 8858 0088',
    'notas' => [
            9.5,
            7.5,
            8.0,
            9.0,
        ]
];

$alunos = [
    $a1,
    $a2,
    $a3,
    $a4,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container"></div>
    <h1 class="mt-5">Dados dos Alunos</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
        </thead>
    
        <tbody>
            <?php
                foreach ($alunos as $cadaAluno) {
                    echo '<tr>';
                        echo '<td>' . $cadaAluno['nome'] . '</td>';
                        echo '<td>' . $cadaAluno['email'] . '</td>';
                        echo '<td>' . $cadaAluno['telefone'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>