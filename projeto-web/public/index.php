<?php

require __DIR__ . '/../vendor/autoload.php';

$rotas = require __DIR__ . '/../Rotas/routes.php';

$rota = $_SERVER['PATH_INFO'] ?? '/cursos';

$response = new $rotas[$rota];
$response->requisicao();