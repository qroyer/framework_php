<?php


namespace App\Controller;

use App\Framework\ControllerAbstract;

/**
 * Class Error
 * @package App\Controller
 */
class Error extends controllerAbstract
{
    public function error()
    {
        $this->loadLayout();
        $this->setBody('errorPath.phtml');
        $this->render();
    }

}
