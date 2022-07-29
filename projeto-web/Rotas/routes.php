<?php

use Impacta\Cursos\Controller\{
    ListarCursos,
    NovoCurso,
    InserirCurso,
};

return [
    '/cursos' => ListarCursos::class,
    '/novo' => NovoCurso::class,
    '/inserir-curso' => InserirCurso::class,
];