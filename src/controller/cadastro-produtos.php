<?php

require 'renderHTML.php';

$data = [
    '#title' => 'Cadastro de Produtos',
    '#erro' => $_GET['aviso'],
    '#mensagem' => 'Dados não cadastrados',
];

render($data, $file);