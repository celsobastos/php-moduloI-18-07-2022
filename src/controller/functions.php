<?php

function validaQuantidadeCaracteres(
    string $valor,
    string $url, 
    string $flag
) {
    if (strlen($valor) > 50 || strlen($valor) === 0) {
        header("location: /$url?aviso=$flag");
        die;
    }

    return true;
}

/** Criar função para salvar dados em arquivo */

function salvaEmArquivo(string $file, string $filtro, string $url_return) {
    $file = 'file/' . $file;
    file_put_contents($file, $filtro . PHP_EOL, FILE_APPEND | LOCK_EX);
    header('location: ' . $url_return);
}
