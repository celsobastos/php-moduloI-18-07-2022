<?php

require 'Funcionario.php';
require 'Cliente.php';


$cliente1  = new Cliente();
$cliente1->nome = 'Almir';
$cliente1->cpf = '123.456.789-85';
var_dump($cliente1);

// $funcionario1 = new Funcionario();
// $funcionario1->nome = 'Amanda';
// var_dump($funcionario1);
// echo PHP_EOL;

// $funcionario2 = new Funcionario();
// $funcionario2->nome = 'Pedro';
// var_dump($funcionario2);