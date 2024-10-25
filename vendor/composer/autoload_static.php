<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd173f62e19a8e777227d580cb825fede
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd173f62e19a8e777227d580cb825fede::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd173f62e19a8e777227d580cb825fede::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd173f62e19a8e777227d580cb825fede::$classMap;

        }, null, ClassLoader::class);
    }
}
