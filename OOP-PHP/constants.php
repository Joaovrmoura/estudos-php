<?php

class Pessoa{
    //criando constante em php
    const nome = "Joao";
        public function exibirNome(){
        // Referenciando constante dentro da classe
        echo self::nome;
    }
}

//GErei uma classe filho/ Estendi a classe pai pessoa
class Joao extends Pessoa{
    const nome = "Rodrigues";
    // PARENT para referenciar o valor da classe pai utilizo
    // Caso contrário retorna RODRIGUES
    public function exibirNome(){
        // Referenciando constante dentro da classe
        // echo self::nome;
        // PARENT REFERENCIA VALOR DA CLASSE PAI "JOAO"
        echo Parent::nome;
    }
}

$joao = new Joao();
$joao->exibirNome();