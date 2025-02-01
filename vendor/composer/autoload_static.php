<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9c685d2e5f33987811b593dcbd00824
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Seal\\Primitives\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Seal\\Primitives\\' => 
        array (
            0 => __DIR__ . '/../..' . '/wrapper',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9c685d2e5f33987811b593dcbd00824::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9c685d2e5f33987811b593dcbd00824::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9c685d2e5f33987811b593dcbd00824::$classMap;

        }, null, ClassLoader::class);
    }
}
