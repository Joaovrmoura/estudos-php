<?php

// protected = só acessamos a atributo dentro da classe e 
// classes que herdam essa classe

// Private só conseguimos acessar DENTRO DA CLASSE e
// e não conseguimos acessar dentro de classes 
// que herdam os atributo

class Veiculo{
    private $modelo;
    public $cor;
    public $ano;

    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getModelo(){
        return $this->modelo;
    }

    public function andar(){
        echo "Andou";
    }
    public function parar(){
        echo "parou";
    }
}

class Carro extends veiculo{

     public function ligarLimpador(){
       echo "ligou limpador";
   }
}

class Moto extends veiculo{
    public function correr(){
        echo "Correu";
    }
}

$veiculo = new Veiculo();
$veiculo->setModelo("gol");
echo $veiculo->getModelo();
echo "<br>";
var_dump($veiculo);