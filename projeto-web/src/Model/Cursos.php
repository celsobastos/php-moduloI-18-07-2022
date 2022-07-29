<?php
namespace Impacta\Cursos\Model;
class Cursos {

    private int $id;
    private string $descricao;
    private int $status;

    public function __construct(int $id, string $descricao, int $status) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->status = $status;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getStatus() : int {
        return $this->status;
    }
}