<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit857f29061c6476012cfb1265dea1d30f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit857f29061c6476012cfb1265dea1d30f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit857f29061c6476012cfb1265dea1d30f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit857f29061c6476012cfb1265dea1d30f::$classMap;

        }, null, ClassLoader::class);
    }
}
