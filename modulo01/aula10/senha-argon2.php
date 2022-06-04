<?php

//Esse é o mais recomendado atualmente. Gera sempre um resultado diferente mantendo a mesma senha.

$senha = '123456';

echo password_hash($senha, PASSWORD_ARGON2I);