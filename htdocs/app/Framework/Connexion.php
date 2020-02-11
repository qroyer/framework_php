<?php
namespace App\Framework;

class Connexion extends Singleton
{
    private $PDOInstance;

    protected function __construct()
    {
        try {
            $this->PDOInstance = new \PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_MDP);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }

    public function pdoInstance(){
        return $this->PDOInstance;
    }
}
