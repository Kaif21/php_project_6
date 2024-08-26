<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb439185e3844fff3b3dfb0f332863b0c
{
    public static $files = array (
        '891ebedee040e1e1c6871a8cbd692b09' => __DIR__ . '/../..' . '/app/helpers/helpers.php',
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb439185e3844fff3b3dfb0f332863b0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb439185e3844fff3b3dfb0f332863b0c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb439185e3844fff3b3dfb0f332863b0c::$classMap;

        }, null, ClassLoader::class);
    }
}
