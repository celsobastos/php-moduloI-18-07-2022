<?php

namespace Impacta\Cursos\Controller;

abstract class RenderHTML{

    protected function render(string $file) : void {
        require __DIR__ . "/../view/$file.php";
    }
}