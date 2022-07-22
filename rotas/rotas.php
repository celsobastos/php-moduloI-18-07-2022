<?php

$rotas = [
    '/produtos' => 'produtos',
    '/cadastro' => 'cadastro-produtos',
    '/valida-form' => 'valida-form',
    '/home' => 'home-page',
];

/**
 * Esta função retorna o html renderizado.
 * 
 * @param string $rota
 *  Url requisitada pelo usuário
 * 
 * @return void
 */
$renderHtml = function (string $rota) use ($rotas) : void {
   if(array_key_exists($rota, $rotas)) {
    $file = $rotas[$rota];
    require __DIR__ . '/../src/controller/' . $file . '.php';
    exit;
   }
   require __DIR__ . '/../src/controller/404.php';
};


 