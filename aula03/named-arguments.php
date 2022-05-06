<?php

//@AlessandroFeitoza

//named arguments
function mostrarDados(string $nome = '', string $email = '', string $fone = '') {
  echo "
    Nome: {$nome} \n
    Email: {$email} \n
    Fone: {$fone} \n
  ".PHP_EOL;
}

mostrarDados('Flavio');
mostrarDados(email: 'elias@email.com');
mostrarDados(fone: '88888888');
