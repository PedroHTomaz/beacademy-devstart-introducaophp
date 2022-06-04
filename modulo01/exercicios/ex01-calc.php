<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>
    <main>
        <div class="container">
                <form action="" method="post">
                    <input name="n1" placeholder="Primeiro Num"><br>
                    <input name="n2" placeholder="Segundo Num"><br>
                    <button name="somar">Somar</button>
                    <button name="subtrair">Subtrair</button>
                    <button name="multiplicar">Multiplicar</button>
                    <button name="dividir">Dividir</button>
                </form>
        </div>
    </main>
    <?php
        if ($_POST) {
            if (isset($_POST['somar'])) {
                echo $_POST ['n1'] + $_POST ['n2'];
            }

            if (isset($_POST['subtrair'])) {
                echo $_POST ['n1'] - $_POST ['n2'];
            }

            if (isset($_POST['multiplicar'])) {
                echo $_POST ['n1'] * $_POST ['n2'];
            }

            if (isset($_POST['dividir'])) {
                echo $_POST ['n1'] / $_POST ['n2'];
            }
        }
    ?>
</body>
</html>