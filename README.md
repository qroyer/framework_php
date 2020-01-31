# framework_php


#framework sur docker 
``` docker-compose up -d ```

# http://localhost:8080/contact
url du formulaire de contact 

le formulaire envoie les datas vers le controller Action.php 
  il y a un controle sur la methode d'envoie (POST ou GET)
  avec les datas on créé un nouveau Customer (class qui represente les objets qu'on manipule) 
  ensuite on affiche sur un block phtml le resultat de l'envoie du formulaire 
  
 les controllers extendents la classe ControllerAbstract qui a des methodes permettant de charger le 'layout'
 et d'y mettre un templates déclaré dans le controller




# http://localhost:8080/urlrandom
  
  affichage d'une page d'erreur si l'url n'est pas reconnu dans les routes de routes.php

creation d'un autoloader permettant de charger les classes facilement partout dans le projet


dans config.php j'ai define quelques constante pour rendre le code plus lisible sur certaines classes 
