<?php

require __DIR__ . '/../rotas/rotas.php';
$rota = $_SERVER['PATH_INFO'];

// if (!array_key_exists($rota, $rotas)) {
//     http_response_code(404);
// }

$renderHtml($rota);
