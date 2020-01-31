<?php

namespace App\Controller;

use App\Framework\ControllerAbstract;

/**
 * Class Contact
 * @package App\Controller
 */
class Contact extends ControllerAbstract
{

    /**
     *
     */
    const TEMPLATE = 'contact.phtml';

    /**
     *
     */
    public function index()
    {
        $this->loadLayout();
        $this->setBody(self::TEMPLATE);
        $this->render();
    }
}
