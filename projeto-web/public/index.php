<?php

require __DIR__ . '/../vendor/autoload.php';

$rotas = require __DIR__ . '/../Rotas/routes.php';

$rota = $_SERVER['PATH_INFO'] ?? '/cursos';

\session_start();

if (!array_key_exists($rota, $rotas)) {
    $rota = '/cursos';
}

$response = new $rotas[$rota];
$response->requisicao();


// date_default_timezone_set('America/Jamaica');
// $tempo = time();
// echo date("d/F/Y - H:i:s", $tempo);
// exit;
