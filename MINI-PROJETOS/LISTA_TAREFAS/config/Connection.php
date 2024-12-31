<?php

class Connection{
    private static $host = 'mysql:host=localhost;
    dbname=exerciciolista';
    private static $user = 'root';
    private static $password = '';
    private static $connection = null;

    public static function connect(){
        if(self::$connection === null){
            try{
                self::$connection = new PDO(
                self::$host, 
                self::$user,
                self::$password
                );
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
}

