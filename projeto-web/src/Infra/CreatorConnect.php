<?php

namespace Impacta\Cursos\Infra;

class CreatorConnect {

    public static function creatorConnect() {
        $connect = mysqli_connect('localhost', 'impacta', '123456', 'escola');
        if (!$connect) {
            throw new \Error('Conexão Falhou');
            die;
        }
        return $connect;
    }

}
