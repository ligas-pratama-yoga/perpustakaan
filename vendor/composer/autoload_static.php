<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ccf35c9931f22f36b8145c507ccbd03
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ccf35c9931f22f36b8145c507ccbd03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ccf35c9931f22f36b8145c507ccbd03::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ccf35c9931f22f36b8145c507ccbd03::$classMap;

        }, null, ClassLoader::class);
    }
}
