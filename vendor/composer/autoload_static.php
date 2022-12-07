<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd0a78f2e8bffe4499ea2cec1010fec2
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HossamMonir\\Unifonic\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HossamMonir\\Unifonic\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd0a78f2e8bffe4499ea2cec1010fec2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd0a78f2e8bffe4499ea2cec1010fec2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd0a78f2e8bffe4499ea2cec1010fec2::$classMap;

        }, null, ClassLoader::class);
    }
}
