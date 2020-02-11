<?php
namespace App\Controller;

use App\Framework\GetController;
use App\Model\Repository\CustomerRepository;

class ActionGet extends GetController
{
    const TEMPLATE = 'get.phtml';

    private $customer;

    public function index($id){


        $repo = new CustomerRepository();
        $this->customer = $repo->get($id);

        $this->loadLayout();
        $this->setBody(self::TEMPLATE);
        $this->render();
    }
    public function getCustomer()
    {
        return $this->customer;
    }
}
