<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf482b46c44b3094ee7c3044c3a87c217
{
    public static $files = array (
        '7e702cccdb9dd904f2ccf22e5f37abae' => __DIR__ . '/..' . '/facebook/php-sdk-v4/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/php-sdk-v4/src/Facebook',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf482b46c44b3094ee7c3044c3a87c217::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf482b46c44b3094ee7c3044c3a87c217::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
