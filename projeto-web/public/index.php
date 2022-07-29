<?php

$senha = 123;

$senha_cript = password_hash($senha, PASSWORD_DEFAULT);


if (password_verify('123', $senha_cript)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

die;

require __DIR__ . '/../vendor/autoload.php';

$rotas = require __DIR__ . '/../Rotas/routes.php';

$rota = $_SERVER['PATH_INFO'] ?? '/cursos';

\session_start();

$response = new $rotas[$rota];
$response->requisicao();