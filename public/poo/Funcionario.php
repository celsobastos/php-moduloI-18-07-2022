<?php
require 'Pessoa.php';
class Funcionario extends Pessoa {
    public $salario;
    public function exibirNome() {
        return $this->nome;
    }
}
