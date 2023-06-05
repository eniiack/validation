<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit790a7ac1810ae3b5ab22b8749f91bb0c
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EniackValidation\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EniackValidation\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit790a7ac1810ae3b5ab22b8749f91bb0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit790a7ac1810ae3b5ab22b8749f91bb0c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit790a7ac1810ae3b5ab22b8749f91bb0c::$classMap;

        }, null, ClassLoader::class);
    }
}