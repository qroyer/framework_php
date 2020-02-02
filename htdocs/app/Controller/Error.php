<?php


namespace App\Controller;

use App\Framework\ControllerAbstract;

/**
 * Class Error
 * @package App\Controller
 */
class Error extends controllerAbstract
{
    public function errorMethod()
    {
        $this->loadLayout();
        $this->setBody('errorMethod.phtml');
        $this->render();
    }


    public function errorPath()
    {
        $this->loadLayout();
        $this->setBody('errorMethod.phtml');
        $this->render();
    }

}
