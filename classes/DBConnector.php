<?php
namespace classes;
use PDO;
use PDOException;

class DBConnector{
    private static $host = "localhost";
    private static $dbname = "sachinfo";
    private static $dbuser = "root";
    private static $dbpassword = "";

    public static function getConnection(){
        try{
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$dbname;
            $con = new PDO($dsn, self::$dbuser . self::$dbpassword);
            return $con;
        }catch(PDOException $e){
            die("Error in Database Connection: ".$e->getMessage());
        }
        
    }
}


