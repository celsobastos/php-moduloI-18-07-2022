<?php 

namespace Impacta\Cursos\Controller;

final class LoginCurso extends RenderHTML {

    public function requisicao() :void {
    
        
        if(!isset($_COOKIE['color'])) {
            \setcookie('color', '#999', time() + (60 * 10));
        }
        
        $this->render('login-curso', [], 'Login');
    }

}