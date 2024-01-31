<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit32bd5016c9f4d9e6045e4b25c089f8ce
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit32bd5016c9f4d9e6045e4b25c089f8ce', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit32bd5016c9f4d9e6045e4b25c089f8ce', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit32bd5016c9f4d9e6045e4b25c089f8ce::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
