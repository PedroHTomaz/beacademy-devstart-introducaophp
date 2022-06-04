<?php

//funcoes de criptografia

$senha = '123456';

echo base64_encode($senha);

//O resultado será o seguinte: MTIzNDU2
//Se fizermos o seguinte, descobriremos a senha do usuario:

$code = 'MTIzNDU2';
echo base64_decode($code);

//E é por isso que esse método não é uma boa escolha.