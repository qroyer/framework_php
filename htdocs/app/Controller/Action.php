<?php


namespace App\Controller;


use App\Customer;
use App\Framework\PostController;

class Action extends PostController
{

    const TEMPLATE = 'end.phtml';

    public function index()
    {
        $this->loadLayout();
        $this->setBody(self::TEMPLATE);
        $this->render();
    }

    public function getData()
    {

       if($this->isPost())
       {
           $data = $this->getParams();

           $customer = new Customer(
               $data['prenom'],
               $data['nom'],
               $data['email'],
               $data['commentaire']
           );

           return $customer;
       }
       else{
           /*
            * je ne savais pas trop comment traiter le fait que les data soient passées par la mauvaise method
            * jai donc fait l'appel a un template qui afficherai l'erreur
            */
           call_user_func([new \App\Controller\Error(), 'errorMethod']);
       }

    }

}
