<?php

class Conta
{
    var $Agencia;
    var $DataDeCriacao;
    var $Titular;
    var $Senha;
    var $Saldo;
    var $Cancelada;
    var $Codigo;

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
    {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;
        $this->Depositar($Saldo);
        $this->Cancelada = false;
    }
    // function __destruct(){
    //     echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} finalizada ... \n";
    // }

    function Retirar($quantia)
    {
        if ($this->Saldo > $quantia) {
            $this->Saldo - $quantia;
        }
    }
    function Depositar($quantia)
    {
        if ($quantia > 0) {
            $this->Saldo + $quantia;
        }
    }
    function ObterSaldo()
    {
        return $this->Saldo;
    }
}
