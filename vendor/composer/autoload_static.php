<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe290d20644b79d9423d082e46a477c8
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe290d20644b79d9423d082e46a477c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe290d20644b79d9423d082e46a477c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe290d20644b79d9423d082e46a477c8::$classMap;

        }, null, ClassLoader::class);
    }
}