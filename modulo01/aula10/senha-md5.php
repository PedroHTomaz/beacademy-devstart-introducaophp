<?php

//funcoes de criptografia

$senha = '123456';

echo md5($senha);

//Em todas as vezes que comandarmos echo, será gerado o mesmo código hash. Portanto mostrará, em um possível vazamento de dados, que muitos usuarios utilizam a mesma senha, etc.