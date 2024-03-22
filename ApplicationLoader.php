<?php


class ApplicationLoader
{

    private function load($class)
    {   
        if(file_exists("app/{$class}.php")){
            require_once "app/{$class}.php";
            return true;
        }
    }

    public function register()
    {
        spl_autoload_register([$this, 'load']);
    }
}

$load = new ApplicationLoader;
$load->register();