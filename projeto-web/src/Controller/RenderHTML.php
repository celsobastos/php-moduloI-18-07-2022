<?php

namespace Impacta\Cursos\Controller;

abstract class RenderHTML{

    protected function render(
        string $file,
        array $data,
        string $titulo
    ) : void {
        require __DIR__ . "/../view/$file.php";
    }
}