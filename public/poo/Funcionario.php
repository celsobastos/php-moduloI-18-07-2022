<?php
require 'Pessoa.php';
final class Funcionario extends Pessoa {
    private $salario;
    
    public function __construct(float $salario, string $nome, string $cpf, string $cep) {
        $this->salario = $salario;
        parent::__construct($nome, $cpf, $cep);
    }

    public function exibirNome() {
        return $this->nome;
    }

    public function __destruct() {
        echo 'Destruido';
    }
}
