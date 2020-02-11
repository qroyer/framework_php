<?php

namespace App\Model\Repository;

use App\Framework\Connexion;
use App\Model\Customer;

class CustomerRepository
{
    public function Save(Customer $customer)
    {
        $requete = 'INSERT INTO customer VALUES(null,:firstname,:lastname,:email,:commentaire);';
        $select = \App\Framework\Connexion::getInstance()->pdoInstance()->prepare($requete);
        $select->execute(array(':firstname' => $customer->getFirstname(), ':lastname' => $customer->getLastname(), ':email' => $customer->getEmail(), ':commentaire' => $customer->getCommentaire()));

    }

    public function get($id)
    {
        $query = "SELECT * FROM customer WHERE id = ". $id[0];
        return Connexion::getInstance()->pdoInstance()->query($query)->fetch();
    }

    public function getList()
    {
        $requete = 'SELECT * FROM customer;';
        return \App\Framework\Connexion::getInstance()->pdoInstance()->query($requete)->fetchAll();
    }
}
