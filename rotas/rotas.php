<?php

$rotas = [
    '/produtos' => 'produtos',
    '/cadastro' => 'cadastro-produtos',
    '/valida-form' => 'valida-form',
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
    require __DIR__ . '/../src/controller/' .  $rotas[$rota] . '.php';
    exit;
   }
   require __DIR__ . '/../src/controller/404.php';
};


 