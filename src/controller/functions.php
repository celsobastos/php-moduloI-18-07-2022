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
