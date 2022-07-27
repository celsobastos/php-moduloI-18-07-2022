<?php
require 'Pessoa.php';
class Cliente extends Pessoa {
    public $conta;
    private $saldo;
    public $chequeEspecial;
    static public $qtde_clientes = 0;

    public function __construct() {
        self::$qtde_clientes++;
    }

    public function __destruct() {
        self::$qtde_clientes--;
    }

    // public function recuperarConta() {
    //     return $this->conta;
    // }

    // private function recuperarSaldo() {
    //     return $this->saldo;
    // }

    // protected function recuperarChequeEspecial() {
    //     return $this->chequeEspecial;
    // }

    public function setSaldo() {
        $this->saldo = 0;
        // self::testSaldo();
    }

    static public function testSaldo() {
        return self::$qtde_clientes;
    }

}

