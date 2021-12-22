<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfe409a25a77f936ea13e5e15325263d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdfe409a25a77f936ea13e5e15325263d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdfe409a25a77f936ea13e5e15325263d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdfe409a25a77f936ea13e5e15325263d::$classMap;

        }, null, ClassLoader::class);
    }
}