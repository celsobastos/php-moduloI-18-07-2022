<?php

require __DIR__ . '/../rotas/rotas.php';

$rota = $_SERVER['PATH_INFO'];


$renderHtml($rota);