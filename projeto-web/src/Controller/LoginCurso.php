<?php 

namespace Impacta\Cursos\Controller;

final class LoginCurso extends RenderHTML {

    public function requisicao() :void {

        $this->render('login-curso', [], 'Login');
    }

}