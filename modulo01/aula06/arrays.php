<?php

//Criando um array em PHP
$alunos = [
    'Pedro', //0
    'Luan', //1
    'Mateus' //2
];

//Adicionando uma nova posição (novo aluno) no array
$alunos[] = 'Denilson'; //3

//Ele sempre adicionará a nova posição utilizando a lógica 'maior posição + 1'.
//Exceto se o desenvolvedor ordenar que ele adicione em uma posição específica.
?>

<html>
    <!--
<ul>
    <?php //for($c = 0; $c <= 3; $c++) {
        //echo "<li>{$alunos[$c]}</li>";
    //}
    //essa estrutura funciona mas ainda é necessário alterar o número para cada vez que adicionar um novo aluno.
    ?>
</ul>
-->
</html>

<?php

echo '<ul>';
foreach ($alunos as $cadaAluno) {
    echo "<li>{$cadaAluno}</li>";
}
echo '</ul>';

?>