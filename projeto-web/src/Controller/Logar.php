<?php 

namespace Impacta\Cursos\Controller;

use Impacta\Cursos\Repositorio\loginRepositorio;

final class Logar extends RenderHTML {

    public function requisicao() :void {

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $login = new loginRepositorio();
        $usuario = $login->login($email);

        if (
            !empty($usuario)
            && password_verify($senha , $usuario->senha)
            && $email === $usuario->email
        ) { 
            $_SESSION['logado'] = true;
            $_SESSION['email'] = $email;
            header('Location: /cursos');
            die;
        }
        
        $_SESSION['mensagem'] = 'Senha Incorreta';
        header('Location: /login');
    }

}