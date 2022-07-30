<?php 

namespace Impacta\Cursos\Controller;

use Impacta\Cursos\Repositorio\CursosRepositorio;

final class NovoCurso extends RenderHTML {

    public function requisicao() :void {

        if(!isset($_SESSION['logado'])){
            header('Location: /login');
            die;
        }

        $id = filter_var(
            !isset($_GET['id']) ?? '',
            FILTER_VALIDATE_INT
        );

        if(!$id) {
            echo 'Erro digite um id valido';
            die;
        }

        $curso = (new CursosRepositorio())->getCurso($id);
        $this->render('novo-curso', [$curso], 'Novo Curso');
    }

}