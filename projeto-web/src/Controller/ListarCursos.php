<?php 

namespace Impacta\Cursos\Controller;

final class ListarCursos extends RenderHTML {

    public function requisicao() :void {
        $this->render('listar-cursos');
    }

}