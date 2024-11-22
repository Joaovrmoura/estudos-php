<?php

// defina a estruutara do objeto

class Pessoa{ 
    // Atributos da classe
    public $nome;
    public $idade;

    // Atributos da classe Pessoa
    public function Falar(){
        // Acessando por dentro da classe 
        //atributos equuilavente ao self
        echo "meu nome é ". $this->nome .
        " minha idade é ". $this->idade ;
    }
}

//instanciando classes em php usamos New
$joao = new Pessoa();
// acessando do lado de fora atributos da classe
// só consigo acessar os atributos ]
// aqui pois são public
$joao->idade = 50;
$joao->nome = 'joao';
// Acesso ao metodo da classe
$joao->Falar();
echo "<br>";
