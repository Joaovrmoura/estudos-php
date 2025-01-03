<?php

class Product{
    var $Codigo; 
    var $Descricao;
    var $Preco;
    var $Quantidade;

    public function ImprimeEtiqueta(){
        print 'Código: '  . $this->Codigo . '<br>';
        print 'Descrição: ' . $this->Descricao . '<br>';
    } 
}