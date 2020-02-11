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
     * @var
     */
    private $parameters = [];

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
        try {
            $this->prepare();
            call_user_func([new $this->class, $this->method], $this->parameters);
        } catch (\Exception $e) {
            $params = array($e->getMessage());
            call_user_func_array([new $this->class, $this->method], $params);
            die;
        }
    }

    /**
     * @throws \Exception
     */
    private function prepare()
    {
        foreach ($this->routes as $key => $val) {
            if (strpos($key, '#') === 0 && preg_match($key, $_SERVER["REQUEST_URI"])) {
                $var = preg_split("#\/#", $_SERVER["REQUEST_URI"])[2];
                $route = $this->routes[$key];
                $this->class = array_shift($route);
                $this->method = array_shift($route);
                array_push($this->parameters, $var);
                return 0;
            }
        }
        if (!isset($this->routes[$_SERVER['REDIRECT_URL']])) {
            $this->class = 'App\Controller\Error';
            $this->method = 'errorPath';
            return 0;
        }else {
            $route = $this->routes[$_SERVER["REQUEST_URI"]];
            $this->class = array_shift($route);
            $this->method = array_shift($route);
        }
    }

}
