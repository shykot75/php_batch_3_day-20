<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitace7190e46d88fd1882b1f06181e6977
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitace7190e46d88fd1882b1f06181e6977::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitace7190e46d88fd1882b1f06181e6977::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitace7190e46d88fd1882b1f06181e6977::$classMap;

        }, null, ClassLoader::class);
    }
}
