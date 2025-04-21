<?php

# Exercício com classes
# 1 - Crie uma classe Carro (Nome)
# 2 - Crie uma classe Motor (Nome)
# 3 - Crie uma classe Fabricante (Nome)
# 4 - Faça a ligação entre Carro tem um Motor
# Obs.: Um motor pode ser de vários carros
# 5 - Faça a ligação entre Carro e um Fabricante
# Obs.: Um fabricante pode fabricar vários carros
# Exiba o nome do carro, motor e fabricante na tela

class Carro{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }   
    public function fabricado()  {
        return 'Fabricado por: ';
    }
}

class Fabricante{
    protected $modelo_fabricado;
    public $name;

    public function __construct($name){
        $this->name = $name;
        $this->modelo_fabricado = null;
    }
    public function get_modelo_fabricado(){
        return $this->modelo_fabricado;
    }
    public function set_modelo_fabricado($modelo_fabricado){
       $this->modelo_fabricado = $modelo_fabricado;
    }
}

class Motor{
    protected $motores;
    public $name;
    protected $carros = [];
    public function __construct($name){
        $this->name = $name;
    }

    public function associar_carro(...$carros){
        foreach($carros as $carro){
            $this->carros[] = $carro;
        }
    }
    public function listar_carros(){
        foreach($this->carros as $carro){
            echo $carro->name . "\n";
        }
    }
}

$carro1 = new Carro("SUV");
$carro2 =  new Carro("sandero");

$motor1 = new Motor("V8");
$motor2 = new Motor("motor 2.4");

$fabrica1 = new Fabricante("toyota");
$fabrica2 = new Fabricante("renault");

$fabrica1->set_modelo_fabricado($carro1);
$fabrica2->set_modelo_fabricado($carro2);

$motor1->associar_carro($carro1, $carro2);
$motor2->listar_carros();

echo "Carro: " . $carro1->name . " Motor: " . $motor1->name . " "; 
echo $carro1->fabricado()  . $fabrica1->name; 

// print(carro1.nome, motor1.nome, fabrica1.modelo_fabricado.fabricadoPor(), fabrica1.nome)
// print(carro2.nome, motor2.nome, fabrica2.modelo_fabricado.fabricadoPor(), fabrica2.nome)