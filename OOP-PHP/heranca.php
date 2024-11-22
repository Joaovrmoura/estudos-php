<?php

//  Recurso que permite que classes compartilhem
// atributos e métodos códigos ou 
// comportamentos generalizados

// quando classes tem atributos e comportamentos 
// iguais podemos reaproveitar o código
// utilizando a herança com extends

class veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function andar(){
        echo "Andou";
    }
    public function parar(){
        echo "parou";
    }
}

class Carro extends veiculo{
   public function limpador(){
       echo "ligou limpador";
   }
}

class Moto extends veiculo{
  
}

$carro = new Carro();
$carro->modelo = "gol";
$carro->cor = "amarelo";
$carro->ano = "2002";
$carro->limpador();
echo "<br>";
$carro->andar();
echo "<br>";
var_dump($carro);
echo "<br>";

$moto = new Moto();
$moto->modelo = "toyota";
$moto->cor = "preto";
$moto->ano = "2010";
echo "<br>";
var_dump($moto);
echo "<br>";
$carro->parar();