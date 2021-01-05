<?php
require ('Constant.php');

class AutoLoader {

    /**
     * @param $S_fileName
     */
    public static function coreAutoLoader($S_fileName)
    {
        $path = __DIR_CORE__ . "$S_fileName.php";
        if (is_readable($path)) {
            require $path;
        }
    }

    /**
     * @param $S_fileName
     */
    public static function controllerAutoLoader($S_fileName)
    {
        $path = __DIR_CONTROLLER__ . "$S_fileName.php";
        if (is_readable($path)) {
            require $path;
        }
    }

    /**
     * @param $S_fileName
     */
    public static function modelAutoLoader($S_fileName)
    {
        $path = __DIR_MODEL__ . "$S_fileName.php";
        if (is_readable($path)) {
            require $path;
        }
    }

    /**
     * @param $S_fileName
     */
    public static function viewAutoLoader($S_fileName)
    {
        $path = __DIR_VIEW__ . "$S_fileName.php";
        if (is_readable($path)) {
            require $path;
        }
    }

}

spl_autoload_register('autoloader::coreAutoLoader');
spl_autoload_register('autoloader::controllerAutoLoader');
spl_autoload_register('autoloader::modelAutoLoader');
spl_autoload_register('autoloader::viewAutoLoader');