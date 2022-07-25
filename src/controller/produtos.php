<?php

$produtos = file_get_contents('file/produtos.txt', true);

$lista_produtos = explode( PHP_EOL , $produtos);

require 'renderHTML.php';

$data = [
    '#title' => 'Lista de Produtos',
    '#produtos' => $lista_produtos,
];

// foreach($lista_produtos as $valor) {
//     echo $valor;
// }

render($data, $file);