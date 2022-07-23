<?php
require 'functions.php';
$produto = $_POST['produto'];
$filtro = filter_var($produto, FILTER_SANITIZE_SPECIAL_CHARS);
if (validaQuantidadeCaracteres($filtro , 'cadastro', '0')) {
    $file = 'produtos.txt';
    file_put_contents($file, $filtro . PHP_EOL, FILE_APPEND | LOCK_EX);
    header('location: /produtos');
}
