<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedb1ac59000a4e6336a443266fec71bb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitedb1ac59000a4e6336a443266fec71bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedb1ac59000a4e6336a443266fec71bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitedb1ac59000a4e6336a443266fec71bb::$classMap;

        }, null, ClassLoader::class);
    }
}
