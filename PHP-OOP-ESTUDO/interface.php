<?php

// interface srve como um modelo
// / a ser utilizado por outras classses

interface Crud{
    //não necessita de código
    public function create($data);
    public function read();
    public function update();
    public function delete();
   
}
// Implements obriga a classe a utilizar os métodos
// da interface
class Noticias implements Crud{
    // a LÓGICA É CRIADA AQUI UTILIZANDO OS MÉTODOS
    // DAS INTERFACES
    public function create($data){
        
    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }
    
}