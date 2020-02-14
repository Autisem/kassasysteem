<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite35bd7b51473b11f74902a73a959adf5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite35bd7b51473b11f74902a73a959adf5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite35bd7b51473b11f74902a73a959adf5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}