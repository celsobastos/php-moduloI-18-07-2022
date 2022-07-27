<?php

// require 'Funcionario.php';
// require 'ClientePessoaJuridica.php';
require 'Cliente.php';

$test = new Cliente();
$test2 = new Cliente();
$test3 = new Cliente();
$test3 = $test2;
echo Cliente::$qtde_clientes;


// $pessoaJuridica = new ClientePessoaJuridica('DataMin', '456.123.789', '12345-123');
// $pessoaJuridica->setSaldo();
// var_dump($pessoaJuridica);

// $funcionario = new Funcionario(5000.00, 'Pedro', '123-123-123-52', '12344-322');
// var_dump($funcionario);
// unset($funcionario);

// $cliente1  = new Cliente();
// $cliente1->nome = 'Almir';
// $cliente1->cpf = '123.456.789-85';
// $cliente1->saldoInicial();
// $cliente1->conta = '1545644';
// $cliente1->chequeEspecial = 4000;
// var_dump($cliente1);

// echo 'Numero da conta: ' .  $cliente1->recuperarConta() . PHP_EOL;
// echo 'Saldo: ' .  $cliente1->test() . PHP_EOL;
//echo 'Cheque Especial: ' .  $cliente1->recuperarChequeEspecial() . PHP_EOL;


// $funcionario1 = new Funcionario();
// $funcionario1->nome = 'Amanda';
// var_dump($funcionario1);
// echo PHP_EOL;

// $funcionario2 = new Funcionario();
// $funcionario2->nome = 'Pedro';
// var_dump($funcionario2);