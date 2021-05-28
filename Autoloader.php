<?php

namespace App;

class Autoloader {

    public static function web()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($class)
    {
        $class = str_replace(__NAMESPACE__ . '\\', '',$class );
        $class = str_replace('\\', '/', $class);

        $path =  __DIR__.DIRECTORY_SEPARATOR.$class .'.php' ;

        if(file_exists($path))
        {
            require_once $path;
        } else {
            die("<br> La page n'existe pas");
        }
    }
}