<?php

class bd
{
    protected static $instance;
    private function __construct()
    {
    }

    private function __clone()
    {

    }
    private function __wakeup(){

    }
    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function actionQuery($hostname, $login,$password,$db){
        return mysqli_connect($hostname, $login, $password, $db);
    }
}