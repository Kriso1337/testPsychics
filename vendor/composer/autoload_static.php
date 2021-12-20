<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit600d02a4c63972b4141f2d48f9d58794
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit600d02a4c63972b4141f2d48f9d58794::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit600d02a4c63972b4141f2d48f9d58794::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit600d02a4c63972b4141f2d48f9d58794::$classMap;

        }, null, ClassLoader::class);
    }
}