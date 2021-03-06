<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit591990f59cc03e5d67345327b4d83923
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

        spl_autoload_register(array('ComposerAutoloaderInit591990f59cc03e5d67345327b4d83923', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit591990f59cc03e5d67345327b4d83923', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit591990f59cc03e5d67345327b4d83923::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
