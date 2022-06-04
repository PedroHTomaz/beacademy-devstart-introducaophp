<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <?php

        $dog1 = [
            'raca' => 'Yorkshire',
            'preco' => 'R$500,00 a R$4000,00',
            'descricao' => 'Uma raça de pequeno porte, perfeita para quem mora em locais pequenos como, por exemplo, apartamento. Seu peso padrão é, em média, 4 quilos, portanto é um animalzinho que não come muito.',
            'foto' => "<img src='./img/yorkshire.jpg' alt='yorkshire'>",
        ];

        $dog2 = [
            'raca' => 'Pug',
            'preco' => 'R$1200,00 a 7000,00',
            'descricao' => 'De origem chinesa, o Pug é uma das raças de cachorros fofos mais amados pelos brasileiros. Ele é dócil, carinhoso e bastante tranquilo. Por ser um cão de pequeno porte, é ideal para casas pequenas ou apartamentos. Além disso, não é uma raça que costuma latir tanto.',
            'foto' => "<img src='./img/pug.jpg' alt='pug'>",
        ];

        $dog3 = [
            'raca' => 'Golden Retriever',
            'preco' => 'R$700,00 a 7000,00',
            'descricao' => 'Carinhosos, brincalhões, pacientes e muito dóceis. Ideais para conviverem com crianças e idosos. O peso dessas raças pode variar entre 25 a 36 quilos. São cachorros que têm a tendência de engordar facilmente, portanto, cuidado com a alimentação.',
            'foto' => "<img src='./img/golden-retriever.jpg' alt='golden retriever'>",
        ];

        $dog4 = [
            'raca' => 'Poodle',
            'preco' => 'R$300,00 a 2000,00',
            'descricao' => 'É difícil achar um bairro ou região que não tenha uma casa com um Poodle. Isso porque essa é a raça mais popular de cachorros no Brasil. Seu porte é pequeno e eles têm uma aparência de bichinho de pelúcia. O peso não passa dos oito quilos, por isso, não precisa dar muita ração a ele. É uma raça que pede carinho quando quer, comida, passear e para brincar. O Poodle é uma raça bastante carente, por isso, não o deixe sozinho por muito tempo e nem o deixe de lado. Ele ama a companhia de seus donos.',
            'foto' => "<img src='./img/poodle.jpg' alt='poodle'>",
        ];

        $dog5 = [
            'raca' => 'Vira Lata',
            'preco' => 'R$ 0,00',
            'descricao' => 'Não é à toa que o vira-lata faz tanto sucesso entre as famílias brasileiras. Único por natureza, cada cãozinho da raça apresenta características e personalidades muito próprias. Por isso, dificilmente você encontrará dois iguais no mundo. ',
            'foto' => "<img src='./img/vira-lata.jpg' alt='vira lata'>",
        ];

        $dogs = [
            $dog1,
            $dog2,
            $dog3,
            $dog4,
            $dog5,
        ];
?>
    <main>
        <div class="container">
            <h1 class="mt-5" align="center">Adote um filhote &#x1F436 &#x1F603</h1>
            <hr>
            <table class="table table-hover table-striped mt-5">
                <thead class="table-dark" align="center">
                    <tr>
                        <th>Raça</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                        foreach ($dogs as $cadaDog) {
                            echo "<tr>";
                            echo '<td>'.$cadaDog['raca'].'</td>';
                            echo '<td>'.$cadaDog['preco'].'</td>';
                            echo '<td>'.$cadaDog['descricao'].'</td>';
                            echo '<td>'.$cadaDog['foto'].'</td>';
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>