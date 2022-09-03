<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc399140f39e349e5176ded74d2f3db2
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bliq\\Hooks\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bliq\\Hooks\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc399140f39e349e5176ded74d2f3db2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc399140f39e349e5176ded74d2f3db2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc399140f39e349e5176ded74d2f3db2::$classMap;

        }, null, ClassLoader::class);
    }
}