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
        if(!isset($this->routes[$_SERVER['REDIRECT_URL']])){
           $this->class = 'App\Controller\Error';
           $this->method = 'errorPath';
           return;
        }

        $route = $this->routes[$_SERVER['REDIRECT_URL'] ];
        $this->class = array_shift($route);
        $this->method = array_shift($route);
    }

}
