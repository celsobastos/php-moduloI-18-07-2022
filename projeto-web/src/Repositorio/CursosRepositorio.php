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

    public function update(int $id, string $descricao) : bool {
        $sql = "UPDATE cursos set descricao = '$descricao' WHERE id = '$id'";
        $insert = \mysqli_query($this->connect, $sql);
        return $insert ? true : false;
    }

    public function deletar(int $id) : bool {
        $sql = "DELETE FROM cursos where id = '$id'";
        $delete = \mysqli_query($this->connect, $sql);
        return $delete ? true : false;
    }

    public function getCurso(int $id) {
        $sql = "SELECT descricao FROM cursos where id = '$id';";
        $curso = \mysqli_query($this->connect, $sql);
        return mysqli_fetch_object($curso) ?? false;
    }
}