<?php

// PRIVATE FUNCTION: mesma regra de atributos, só posso
// acssar o private dentro da classe e somente 

// PROTECTED FUNCTION: Só posso acessar dentro da 
// classe e nas heranças da classe

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    private function andar(){
        echo "andou";
    }

    // para acessar o metodo privado fora da class
    // tenho que atribuir a um metodo public
    public function showAction(){
        $this->andar();
    }
}
class Carro extends veiculo{
    public function ligarLimpador(){
        echo "ligou limpador";
  }

}

$carro = new Carro();
$carro->showAction();

echo "<br>";

var_dump($carro);