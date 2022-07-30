<?php

namespace Impacta\Cursos\Repositorio;

use Impacta\Cursos\Infra\CreatorConnect;
use mysqli;

class loginRepositorio {
    private $connect;

    public function __construct() {
        $this->connect = CreatorConnect::creatorConnect();
    }

    /**
     * 
     * @return array|object
     *  
     */
    public function login(string $email) {
        $sql = "SELECT email, senha FROM usuarios where email = '$email';";
        $login = \mysqli_query($this->connect, $sql);
        return mysqli_fetch_object($login) ?? [];
    }

    // public function inserir(string $descricao) : bool {
    //     $sql = "INSERT INTO cursos (descricao, status) VALUES ('$descricao', '1')";
    //     $insert = \mysqli_query($this->connect, $sql);
    //     return $insert ? true : false;
    // }
}