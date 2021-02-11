<?php

namespace Vitor\Database;

use PDO;

abstract class Connection{

    private static $conn;

    public static function getconn(){

        if(!self::$conn){
        self::$conn = new \PDO("mysql: host=localhost dbname=bd-sist-login",'root','135967');
            
        }

        return self::$conn;
    }
}