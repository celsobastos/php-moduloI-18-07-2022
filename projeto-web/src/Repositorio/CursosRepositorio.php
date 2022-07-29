<?php

namespace Impacta\Cursos\Repositorio;

use Impacta\Cursos\Infra\CreatorConnect;
use Impacta\Cursos\Model\Cursos;

class CursosRepositorio {
    private $connect;

    public function __construct() {
        $this->connect = CreatorConnect::creatorConnect();
    }

    public function listarCursos() : array {
        $sql = 'SELECT * FROM cursos';
        $cursos = \mysqli_query($this->connect, $sql);
        $lista_cursos = [];

        while ($curso = \mysqli_fetch_assoc($cursos)) {
            $lista_cursos[] = new Cursos(
                $curso['id'],
                $curso['descricao'],
                $curso['status']
            );
        }
        return $lista_cursos;
    }

    public function inserir(string $descricao) : bool {
        $sql = "INSERT INTO cursos (descricao, status) VALUES ('$descricao', '1')";
        $insert = \mysqli_query($this->connect, $sql);
        return $insert ? true : false;
    }
}