<?php

require_once('Autoload.php');
require_once ('config.php');


autoload::run();


$router = new App\Framework\Router();
$router->exec();



