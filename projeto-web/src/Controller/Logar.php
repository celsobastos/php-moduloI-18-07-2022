<?php 

namespace Impacta\Cursos\Controller;

final class Logar extends RenderHTML {

    public function requisicao() :void {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        
        $email_acesso = 'celso@impacta.com';
        $senha_acesso = '123456';


        if ($email === $email_acesso && $senha === $senha_acesso ) {
            $_SESSION['logado'] = true;
            $_SESSION['email'] = $email;

            header('Location: /cursos');
            die;
        }

        header('Location: /login');
        
    }

}