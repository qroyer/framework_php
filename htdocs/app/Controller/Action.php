<?php


namespace App\Controller;


use App\Customer;
use App\Framework\ControllerAbstract;

class Action extends ControllerAbstract
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
        $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : 'Inconnu';
        $nom = isset($_POST['nom']) ? $_POST['nom'] : 'Inconnu';
        $email = isset($_POST['email']) ? $_POST['email'] : 'Inconnu';
        $commentaire = isset($_POST['commentaire']) ? $_POST['commentaire'] : 'Inconnu';

        $customer = new Customer($nom,$prenom,$email,$commentaire);

        return $customer;
    }

}
