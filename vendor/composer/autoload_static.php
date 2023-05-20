<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5842ac14ec55298c3d7dd7e145d4d18
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5842ac14ec55298c3d7dd7e145d4d18::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5842ac14ec55298c3d7dd7e145d4d18::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite5842ac14ec55298c3d7dd7e145d4d18::$classMap;

        }, null, ClassLoader::class);
    }
}
