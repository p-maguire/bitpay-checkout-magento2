<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b6f58ae51920ebef1a3fc22a952ae98
{
    private $reg = __DIR__ . '/../..' . '/registration.php';
    public static $files = array (
        'b3f59f562d366a2c552dd1bc74c8a65b' => $reg
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bitpay\\BPCheckout\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bitpay\\BPCheckout\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b6f58ae51920ebef1a3fc22a952ae98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b6f58ae51920ebef1a3fc22a952ae98::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
