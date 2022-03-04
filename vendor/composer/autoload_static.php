<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb710f78aa478ab23e20d53bb5c2c392
{
    public static $files = array (
        'fc73bab8d04e21bcdda37ca319c63800' => __DIR__ . '/..' . '/mikecao/flight/flight/autoload.php',
        '5b7d984aab5ae919d3362ad9588977eb' => __DIR__ . '/..' . '/mikecao/flight/flight/Flight.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb710f78aa478ab23e20d53bb5c2c392::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb710f78aa478ab23e20d53bb5c2c392::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb710f78aa478ab23e20d53bb5c2c392::$classMap;

        }, null, ClassLoader::class);
    }
}
