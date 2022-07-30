<?php 

namespace Impacta\Cursos\Controller;

use Impacta\Cursos\Repositorio\CursosRepositorio;

final class NovoCurso extends RenderHTML {

    public function requisicao() :void {

        if(!isset($_SESSION['logado'])){
            header('Location: /login');
            die;
        }
        if ($this->validate($_GET['id'] ?? '')) {      
            $curso = (array) (new CursosRepositorio())->getCurso($_GET['id']);
        }

        $this->render('novo-curso', $curso ?? [], 'Novo Curso');
    }

    private function validate(string $id): bool {
        return filter_var(
            $id,
            FILTER_VALIDATE_INT
        );
    }
}