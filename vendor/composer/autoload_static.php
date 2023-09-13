<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc950037d26f61b71c99f448dcb476b38
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Guilheps\\G28ColunaWidgets\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Guilheps\\G28ColunaWidgets\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc950037d26f61b71c99f448dcb476b38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc950037d26f61b71c99f448dcb476b38::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc950037d26f61b71c99f448dcb476b38::$classMap;

        }, null, ClassLoader::class);
    }
}