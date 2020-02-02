<?php


namespace App\Controller;


use App\Framework\ControllerAbstract;

class Index extends ControllerAbstract
{

    const TEMPLATE = 'index.phtml';

    public function index()
    {
        $this->loadlayout();
        $this->setBody(self::TEMPLATE);
        $this->render();
    }
}
