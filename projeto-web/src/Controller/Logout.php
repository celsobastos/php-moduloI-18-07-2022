<?php 

namespace Impacta\Cursos\Controller;

final class Logout extends RenderHTML {

    public function requisicao() :void {
        session_destroy();
        header('Location: /login');
    }

}