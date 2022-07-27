<?php

abstract class Pessoa {
    private $nome;
    private $cpf;
    private $cep;

    public function __construct(string $nome, string $cpf, string $cep){
        $this->setNome($nome);
        $this->cpf = $cpf;
        $this->setCep($cep);
    }

    public function setNome(string $nome): void {
        $this->nome = trim($nome);
    }

    public function setCep(string $cep) {
        $test_cep = preg_match('#^[0-9]{5}-[0-9]{3}$#', $cep);

        if ($test_cep === 0) {
            throw new Exception('Cep invalido');
        }
        $this->cep = $cep;
    }
}
