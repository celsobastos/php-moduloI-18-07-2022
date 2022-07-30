<?php

use Impacta\Cursos\Controller\{
    ListarCursos,
    NovoCurso,
    InserirCurso,
    LoginCurso,
    Logar,
    Logout,
    DeletarCurso,
};

return [
    '/cursos' => ListarCursos::class,
    '/novo' => NovoCurso::class,
    '/inserir-curso' => InserirCurso::class,
    '/login' => LoginCurso::class,
    '/logar' => Logar::class,
    '/logout' => Logout::class,
    '/deletar' => DeletarCurso::class,
];