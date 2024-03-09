<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6a4229ba1d1f1508735d810f2913703
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alvy\\TglIndo\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alvy\\TglIndo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite6a4229ba1d1f1508735d810f2913703::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6a4229ba1d1f1508735d810f2913703::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6a4229ba1d1f1508735d810f2913703::$classMap;

        }, null, ClassLoader::class);
    }
}
