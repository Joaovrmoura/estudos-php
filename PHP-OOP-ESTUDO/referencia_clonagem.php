<?php
class Pessoa{
    public $idade;
    // Esse método é utilizado quando utilizamos
    // o método clone
    public function __clone(){
        echo "CLonagem de objetos";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25; 
// Aqui não estou gerando outro objeto
// da classe pessoa, sim referenciando
// o objeto pessoa com outra variavel
$pessoa2 = $pessoa;
$pessoa2->idade = 35;

// Utilizo o CLONE 
// Caso queira criar outro objeto com 
// o objeto pessoa  
$pessoa3 = clone $pessoa;
$pessoa3->idade = 98;

echo "<br>";
echo "idade pessoa: ". $pessoa->idade;
echo "<br>";
echo "idade pessoa 2: ". $pessoa2->idade;
echo "<br>";
echo "Idade pessoa 3: ". $pessoa3->idade;
echo "<br>";