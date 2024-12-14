<?php

class Connection{
    private static $host="mysql:host=localhost;
    dbname=agenda_contatos";
    private static $user="root";
    private static $pass='';
    private static $connection = null;
    
    public static function Getconn(){
        if(self::$connection === null){
            try{
                self::$connection = new PDO(
                self::$host,
                self::$user, 
                self::$pass);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                error_log("Erro ao conectar: ". $e->getMessage());
                die("Erro na Conexão");
            }
        }
        return self::$connection;
    }

    public static function rotas($conn){
        return define(
        'ROOT_URL', 
        'http://localhost/PDO-treino/OOP-PHP/AGENDA_CONTATOS/');
    }
    private function __construct() {}
    private function __clone() {}
}
