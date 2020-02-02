<?php


namespace App\Framework;


class PostController extends ControllerAbstract
{

    public function isPost()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            return true;
        }
        return false;
    }

    public function getParams()
    {
        $params = array() ;
        foreach($_POST as $key => $value){
            if(isset($_POST[$key]))
            {
                $params += [ $key => $value];
            }
        }
        return $params;
    }



}
