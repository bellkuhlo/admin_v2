<?php
// cms/app/core/Autoloader.php

namespace App\Core;

class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
            $file = ltrim($file, '\\/');
            $path = __DIR__ . '/../' . $file;

            if (file_exists($path)) {
                require_once $path;
            }
        });
    }
}
