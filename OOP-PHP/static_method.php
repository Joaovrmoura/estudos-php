<?php

class Login{
    //Criando atributo static
    public static $user;
    // THIS NÂO FINCIONA
    public static function verify(){
        // com métodos estáticos utilizamos o SELF
        echo "O usuário ". self::$user ." está logado ";
    }
    public function sair(){
        echo "O usuário odeslogou";
    }
}

// ISSO AQUI EU PRECISO MAIS TA 
//DEIXANDO O CÒDIGO VERMELHP
// $l = new Login();
$l->sair();
// Não preciso instanciar a classe caso utilize 
// apenas métodos estaticos
Login::$user = "admin";
Login::verify();