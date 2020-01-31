<?php

namespace App;

class Customer
{
    /**
     * @var
     */
    private $lastname;
    /**
     * @var
     */
    private $firstname;
    /**
     * @var
     */
    private $email;

    private $commentaire;

    /**
     * Customer constructor.
     * @param $lastname
     * @param $firstname
     * @param $email
     * @param $commentaire
     */
    public function __construct($lastname, $firstname, $email, $commentaire)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->commentaire = $commentaire;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }
    /**
     * customer constructor.
     * @param $lastname
     * @param $firstname
     * @param $age
     */


    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function getFullName()
    {
        return $this->getFirstname() . ' ' . $this->getLastname();
    }


}
