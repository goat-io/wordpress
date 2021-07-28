<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6269bcb6672027e6c72124854b2bdc79
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6269bcb6672027e6c72124854b2bdc79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6269bcb6672027e6c72124854b2bdc79::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
