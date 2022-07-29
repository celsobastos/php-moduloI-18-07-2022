<?php 

namespace Impacta\Cursos\Controller;
use Impacta\Cursos\Repositorio\CursosRepositorio;

final class ListarCursos extends RenderHTML {

    public function requisicao() :void {

        $cursos = (new CursosRepositorio())->listarCursos();
        $this->render('listar-cursos', $cursos, 'Lista de Cursos');
    }

}