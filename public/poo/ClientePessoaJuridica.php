<?php 
require 'Cliente.php';
class ClientePessoaJuridica extends cliente {
    public $cnpj;

    public function setSaldo() {
        $this->saldo = 500;
    }
}