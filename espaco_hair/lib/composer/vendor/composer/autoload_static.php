<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3430ac1b3c3169a817937506f1a8c8a6
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../model',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3430ac1b3c3169a817937506f1a8c8a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3430ac1b3c3169a817937506f1a8c8a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3430ac1b3c3169a817937506f1a8c8a6::$classMap;

        }, null, ClassLoader::class);
    }
}
