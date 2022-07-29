<?php 

namespace Impacta\Cursos\Controller;

final class NovoCurso extends RenderHTML {

    public function requisicao() :void {

        $this->render('novo-curso', [], 'Novo Curso');
    }

}