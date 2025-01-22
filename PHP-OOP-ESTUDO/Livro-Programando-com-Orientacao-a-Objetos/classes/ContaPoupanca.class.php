<?php

class ContaPoupanca extends Conta{
    var $Aniversario;

    //subescrevo o contruct da classe pai, passando novo atributo da classe filho "$Aniversario"
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario){
        parent::__construct(
            $Agencia, 
            $Codigo, 
            $DataDeCriacao, 
            $Titular, 
            $Senha, 
            $Saldo);
            $this->Aniversario = $Aniversario;
    }
    
    function Retirar($quantia){
        if($this->Saldo > $quantia){
            parent::Retirar($quantia);
        }else{
            echo "Retirada não permitida! \n";
            return false;
        }
        return true;
    }
}