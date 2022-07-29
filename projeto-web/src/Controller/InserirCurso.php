<?php

namespace Impacta\Cursos\Controller;
use Impacta\Cursos\Repositorio\CursosRepositorio;

class InserirCurso extends RenderHTML {

    public function requisicao() :void {

        $descricao = $_POST['descricao'];
        if((new CursosRepositorio())->inserir($descricao)) {
            header('Location: /cursos');
        }
    }
}