<?php
namespace App\Controller;

use App\Framework\GetController;
use App\Model\Repository\CustomerRepository;

class ActionList extends GetController
{
    const TEMPLATE = 'list.phtml';

    private $listCustomer;

    public function index(){
        $repo = new CustomerRepository();
        $this->listCustomer = $repo->getList();

        $this->loadLayout();
        $this->setBody(self::TEMPLATE);
        $this->render();

    }
    public function getListCustomer()
    {
        return $this->listCustomer;
    }
}
