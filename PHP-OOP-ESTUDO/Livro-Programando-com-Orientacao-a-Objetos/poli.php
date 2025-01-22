<?php

require 'classes/Conta.class.php';
require 'classes/ContaCorrente.class.php';
require 'classes/ContaPoupanca.class.php';
require 'classes/Pessoa.class.php';

$carlos = new Pessoa(
    10,
    "Carlos da Silva",
    1.85,
    25,
    "10/04/1976",
    "Ensino Médio",
    650.00
);

$conta1 = new Conta(
    68560,
    885,
    "29/07/2016",
    $carlos,
    9960,
    5903
);

$conta1->Depositar(290);
var_dump($conta1->Saldo);

$contas[0] = new ContaCorrente(
    68560,
    885,
    "29/07/2016",
    $carlos,
    9960,
    5903,
    250
);

$contas[1] = new ContaPoupanca(
    9095,
    06415,
    "15/01/2022",
    $carlos,
    6631,
    2393,
    "10/11/2000"
);


// foreach ($contas as $key => $conta) {
//     // Titular é o objeto pessoa mesclado ao objeto Conta
//     echo "Conta: $key, Titular: {$conta->Titular->Nome} \n";
//     echo "Conta: $key, Data de criação: {$conta->DataDeCriacao} \n";
//     echo "Conta: $key, Saldo: {$conta->Saldo} \n";
//     $conta->Retirar(690);
//     echo "Conta: $key, Saldo: {$conta->ObterSaldo()} \n";
// }
