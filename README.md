# framework_php


#framework sur docker 
``` docker-compose up -d ```

# `http://localhost:8080/contact`
url du formulaire de contact 

le formulaire envoie les datas vers le controller Action.php 
  il y a un controle sur la methode d'envoie (POST ou GET)
  avec les datas on créé un nouveau Customer (class qui represente les objets qu'on manipule) 
  ensuite on affiche sur un block phtml le resultat de l'envoie du formulaire 
  
 les controllers extendents la classe ControllerAbstract qui a des methodes permettant de charger le 'layout'
 et d'y mettre un templates déclaré dans le controller

# `http://localhost:8081`
phpmyadmin url 

# `http://localhost:8080/urlrandom`
  
  affichage d'une page d'erreur si l'url n'est pas reconnu dans les routes de routes.php

creation d'un autoloader permettant de charger les classes facilement partout dans le projet


dans config.php j'ai define quelques constante pour rendre le code plus lisible sur certaines classes 


# `http://localhost:8080/contact/list` && `http://localhost:8080/contact/{id}`

ajout des models et Repository correspondant a l'ajout de datas en base, les commentaires laissés sur la page http://localhost:8080/contact
sont ensuite consultable sur /contact/list puis on peux ensuite les consulter sur l'url /contact/XXX
en indiquant l'id du commentaire a la place des XXX

# BDD : table 
```CREATE DATABASE l3;
USE l3
CREATE TABLE customer (
    id smallint unsigned not null auto_increment,
    lastname VARCHAR(30) not null,
    firstname VARCHAR(30) not null,
    email VARCHAR(30) not null,
    commentaire VARCHAR(30) not null,
    constraint pk_customer primary key (id)
);
