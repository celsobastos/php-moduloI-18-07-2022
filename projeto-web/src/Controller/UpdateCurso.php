<?php

namespace Impacta\Cursos\Controller;
use Impacta\Cursos\Repositorio\CursosRepositorio;

class UpdateCurso extends RenderHTML {

    public function requisicao() :void {

        if(!isset($_SESSION['logado'])){
            header('Location: /login');
            die;
        }

        $descricao = $_POST['descricao'];
        $id = $_GET['id'];
        if((new CursosRepositorio())->update($id, $descricao)) {
            header('Location: /cursos');
        }
    }
}