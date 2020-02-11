<?php

return array (
    '/contact' =>
        array (
            'App\Controller\Contact' , 'index'
        ),
    '/action' =>
        array (
            'App\Controller\Action' , 'index'
        ),
    '/' =>
        array (
            'App\Controller\Index' , 'index'
        ),
    '/contact/list' =>
        array (
            'App\Controller\ActionList' , 'index'
        ),
    '#contact\/[0-9]*$#' =>
        array (
            'App\Controller\ActionGet' , 'index'
        )

);
