<?php

require_once('Customer.php');


$prenom = isset($_POST['firstname']) ? $_POST['firstname'] : 'Inconnu';
$nom = isset($_POST['lastname']) ? $_POST['lastname'] : 'Inconnu';
$age = isset($_POST['age']) ? $_POST['age'] : 'Inconnu';

function getFullName($firstname, $lastname = 'Toto')
{
    return $firstname . ' ' . $lastname;
}


$customer = new Customer($nom,$prenom,$age);

$c = new Customer();

$c->setAge('24')
    ->setFirstname('quentin')
    ->setLastname('royer');


echo 'il s\'appelle ' .$c->getFullName(). ' et il a ' .$c->getAge(). ' chromosomes';
