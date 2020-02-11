<?php


namespace App\Framework;


class GetController extends ControllerAbstract
{

    public function isPost()
    {
        if($_SERVER['REQUEST_METHOD'] === 'GET') {
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
