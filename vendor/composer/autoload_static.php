<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72dcd6c8391f4132d0a94a1a8a8a2ad5
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'traits\\' => 7,
        ),
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/traits',
        ),
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit72dcd6c8391f4132d0a94a1a8a8a2ad5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit72dcd6c8391f4132d0a94a1a8a8a2ad5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit72dcd6c8391f4132d0a94a1a8a8a2ad5::$classMap;

        }, null, ClassLoader::class);
    }
}