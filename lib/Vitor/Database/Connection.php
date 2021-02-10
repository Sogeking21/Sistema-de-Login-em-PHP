<?php

namespace Vitor\Database;

use PDO;

abstract class Connection{

    private static $conn;

    public static function getconn(){

        if(!self::$conn){
        self::$conn = new \PDO("mysql: host=localhost dbname=bd-sist-login",'root','');
            
        }

        return self::$conn;
    }
}