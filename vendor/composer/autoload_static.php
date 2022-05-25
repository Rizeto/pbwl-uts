<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22a64ef9455b598f3a5930775c8ded71
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Asus\\UtsPbwlArief\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Asus\\UtsPbwlArief\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit22a64ef9455b598f3a5930775c8ded71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit22a64ef9455b598f3a5930775c8ded71::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit22a64ef9455b598f3a5930775c8ded71::$classMap;

        }, null, ClassLoader::class);
    }
}
