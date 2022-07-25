<?php
require 'functions.php';
$produto = $_POST['produto'];
$filtro = filter_var($produto, FILTER_SANITIZE_SPECIAL_CHARS);
if (validaQuantidadeCaracteres($filtro , 'cadastro', '0')) {
    /** Criar função para salvar dados em arquivo */
    salvaEmArquivo('produtos.txt', 'sapato', '/produtos');
    /** fim */
}
