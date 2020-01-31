<?php

namespace App\Framework;


/**
 * Class Router
 * @package App\Framework
 */
class Router
{

    /**
     * @var mixed
     */
    private $routes;

    /**
     * @var
     */
    private $class;

    /**
     * @var
     */
    private $method;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $this->routes = require('routes.php');
    }

    /**
     *
     */
    public function exec()
    {
        try{
            $this->prepare();
            call_user_func([new $this->class, $this->method]);
        }catch (\Exception $e){
            call_user_func([new $this->class, $this->method]);
        }
    }

    /**
     * @throws \Exception
     */
    private function prepare(){
        if(!isset($this->routes[$_SERVER['REQUEST_URI']])){
           $this->class = 'App\Controller\Error';
           $this->method = 'error';
           return;
        }

        $route = $this->routes[$_SERVER['REQUEST_URI']];
        $this->class = array_shift($route);
        $this->method = array_shift($route);
    }

}
