<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3284fc6b55e0658bd9aa33214795a887
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eclair\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eclair\\' => 
        array (
            0 => __DIR__ . '/..' . '/pronist/eclair/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3284fc6b55e0658bd9aa33214795a887::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3284fc6b55e0658bd9aa33214795a887::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3284fc6b55e0658bd9aa33214795a887::$classMap;

        }, null, ClassLoader::class);
    }
}
