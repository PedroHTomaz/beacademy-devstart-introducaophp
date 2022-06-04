<?php
    $url = $_SERVER['REQUEST_URI'];

    include 'telas/menu.php';
    include 'telas/head.php';
    include 'acoes.php';

    match ($url) {
        '/' => home(),
        '/login' => login(),
        '/cadastro' => cadastro(),
        '/listar' => listar(),
        '/relatorio' => relatorio(),
        default => pagina404(),
    };

    include 'telas/footer.php';
?>