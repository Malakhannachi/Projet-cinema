<?php
namespace Model;
abstract class Connect
{
    const HOST = "localhost";
    const DB = "cinema";
    const USER = "root";
    const PASSWORD = "";
    public static function seConnecter(){
        try{
            return new \PDO("mysql:host=".self::HOST.";dbname=".self::DB, self::USER, self::PASSWORD);
        }catch(\Exception $ex){
            return $ex->getMessage();
        }
    }
}


    