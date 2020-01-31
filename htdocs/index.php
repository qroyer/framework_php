<?php

require_once('Autoload.php');
require_once ('config.php');


autoload::run();

$customer = new App\Customer();

$router = new App\Framework\Router();
$router->exec();


