<?php

// Polimosrfismo é o ato de
// reescrever um método herdado 
// da classe pai/SuperClasse



class Animal{
    public function andar(){
        echo "O animal andou";
    }
    public function correr(){
        echo "O animal correu";
    }
}
class Cavalo extends Animal{
    public function Andar(){
        // chamando o método herdado da classe pai
        // dentro de outra classe herdada
        $this->correr();
    }
}
$animal = new Cavalo();
$animal->andar();