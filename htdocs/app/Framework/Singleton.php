<?php
namespace App\Framework;

class Singleton
{
    static protected $instance = null;

    protected function __construct()
    {
    }

    static function getInstance(){
        if(is_null(self::$instance)){
            $obj = get_called_class();
            self::$instance = new $obj;
        }
        return self::$instance;
    }
}
