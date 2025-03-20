<?php 

namespace myApp\Request;

class Request{
   
    public static function uri()  {
         // pega o nome da url, depois do nome do diretório raíz
         $url = trim(
            parse_url(
            $_SERVER['REQUEST_URI'], 
            PHP_URL_PATH), 
            '/'
        );
        //separa as strings da url
        $last = explode(
            '/', 
            $url
        );
        
        return end($last);
    }
    public static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }
}

$rota = "http://localhost:3000/xampp/htdocs/PDO-treino/EXERCICIOS/CREATE_ROTAS/alunos";
var_dump(Request::uri());