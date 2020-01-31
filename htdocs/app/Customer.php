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
    private $age;

    /**
     * customer constructor.
     * @param $lastname
     * @param $firstname
     * @param $age
     */
    public function __construct($lastname='toto', $firstname='toto', $age='10')
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->age = $age;
    }

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

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param $age
     * @return $this
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function getFullName()
    {
        return $this->getFirstname() . ' ' . $this->getLastname();
    }


}
