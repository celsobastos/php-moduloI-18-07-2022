<?php

namespace Impacta\Cursos\Controller;
use Impacta\Cursos\Repositorio\CursosRepositorio;

class DeletarCurso extends RenderHTML {

    public function requisicao() :void {

        if(!isset($_SESSION['logado'])){
            header('Location: /login');
            die;
        }

        $id = $_GET['id'] ?? '';
        $filter = filter_var($id , FILTER_VALIDATE_INT);
        if ($filter) {
            if((new CursosRepositorio())->deletar($id)) {
                header('Location: /cursos');
            }
        }

        echo 'Error';
        exit;
    }
}