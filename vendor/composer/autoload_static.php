<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c1220e89a00a3b7599509547548b35d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fayez\\UniqueSlugGenerator\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fayez\\UniqueSlugGenerator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c1220e89a00a3b7599509547548b35d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c1220e89a00a3b7599509547548b35d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c1220e89a00a3b7599509547548b35d::$classMap;

        }, null, ClassLoader::class);
    }
}
