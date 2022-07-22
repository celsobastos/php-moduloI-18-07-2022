<?php

$rotas = [
    '/produtos' => 'produtos',
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
   $path = __DIR__;
   if(array_key_exists($rota, $rotas)) {
    require __DIR__ . '/../src/controller/' .  $rotas[$rota] . '.php';
   }
};
