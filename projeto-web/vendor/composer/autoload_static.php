<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit185790817fcbfe06ef70d213240ec822
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'I' => 
        array (
            'Impacta\\Cursos\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Impacta\\Cursos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit185790817fcbfe06ef70d213240ec822::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit185790817fcbfe06ef70d213240ec822::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit185790817fcbfe06ef70d213240ec822::$classMap;

        }, null, ClassLoader::class);
    }
}
