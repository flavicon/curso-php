<?php

function welcome(string $nome):string
{
    return "Bem vindo {$nome}";
}

const welcome = fn (string $nome) => "Bem vindo {$nome}";
