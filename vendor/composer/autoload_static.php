<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3d933fb18b3a50326743a1936c9aad0
{
    public static $classMap = array (
        'ComposerAutoloaderInitf3d933fb18b3a50326743a1936c9aad0' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitf3d933fb18b3a50326743a1936c9aad0' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'core\\ROUTER' => __DIR__ . '/../..' . '/core/router.php',
        'core\\request' => __DIR__ . '/../..' . '/core/request.php',
        'pagecontroller' => __DIR__ . '/../..' . '/app/controllers/pagecontroller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf3d933fb18b3a50326743a1936c9aad0::$classMap;

        }, null, ClassLoader::class);
    }
}