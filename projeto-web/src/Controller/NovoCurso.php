<?php 

namespace Impacta\Cursos\Controller;

final class NovoCurso extends RenderHTML {

    public function requisicao() :void {

        if(!isset($_SESSION['logado'])){
            header('Location: /login');
            die;
        }

        $this->render('novo-curso', [], 'Novo Curso');
    }

}