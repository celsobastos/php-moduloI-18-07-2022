<?php

$connect = mysqli_connect(
    'localhost',
    'impacta',
    '123456',
    'impacta'
);

if(!$connect) {
    echo 'Erro au se conectar!';
    die;
}