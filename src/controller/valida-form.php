<?php

$produto = $_POST['produto'];
$filtro = filter_var($produto, FILTER_SANITIZE_SPECIAL_CHARS);

$file = 'produtos.txt';
$test = file_put_contents($file, $filtro, FILE_IGNORE_NEW_LINES | LOCK_EX);

echo '<pre>';


//header('location: /produtos');