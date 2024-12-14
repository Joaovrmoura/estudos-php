<?php

// Classe abstrata serve como modelo para outras classes
// Portanto nao pode ser instanciada como uma classe

abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }

    // iguala a classe abstrata posso usar 
    // mas tenho que declarar para usalas
    abstract protected function Sacar($s); 
    abstract protected function Depositar($d);
}

class Itau extends Banco{
    public function Sacar($s){
        $this->saldo -= $s;
    }
    public function Depositar($d){
        $this->saldo += $d;
        echo "<br> <hr>Depositou ". $d;
    }
}
class Bradesco extends Banco{
    public function Sacar($s){
       $this->saldo -= $s;
        echo "<br><hr>Sacou ". $s;
    }
    public function Depositar($d){
        $this->saldo += $d;
        echo "<br><hr>Depositou ". $d;
    }
}

echo "Banco itau";
echo "<br>";
$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> saldo itau: ". $itau->getSaldo();
$itau->Depositar(2500);
echo "<hr> saldo itau: ". $itau->getSaldo();
echo "<br>";
echo "<br>";
echo "<br>";

echo "Banco Bradesco";
echo "<br>";
$bradesco = new Bradesco();
$bradesco->setSaldo(800);
echo "<hr> saldo Bradesco: ". $bradesco->getSaldo();
$bradesco->Sacar(20);
echo "<hr> saldo Bradesco: ". $bradesco->getSaldo();