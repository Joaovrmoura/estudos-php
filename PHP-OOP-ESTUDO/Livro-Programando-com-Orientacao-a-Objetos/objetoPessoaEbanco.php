<?php 
# carrega as classes 
include_once 'classes/Pessoa.class.php'; 
include_once 'classes/Conta.class.php'; 

# criação do objeto $carlos 
$carlos= new Pessoa(605, "Carlos da Silva", 1.85, 25,
 "1010411976", "Ensino Médio", 650.00); 
 
echo "Manipulando o objeto {$carlos->Nome}: \n"; 
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n"; 

$carlos->Formar('Técnico em Eletricidade'); 
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n"; 
echo "{$carlos->Nome} possui { $carlos->Idade} anos \n"; 

$carlos->Envelhecer(1); 
echo "{$carlos->Nome} possui {$carlos->Idade} anos \n"; 


# Criação do objeto $conta_carlos 
$conta_carlos = new Conta(6677, "CC.1234.56", 
"10/07/02", $carlos, 9876, 567.89); 

echo "\n"; 
echo "Manipulando a conta de: {$conta_carlos->Titular->Nome}: \n"; 
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n"; 
$conta_carlos->Depositar(20); 
echo "O sa 1 do atua 1 é R\$ {$conta_carlos->ObterSaldo()} \n"; 
$conta_carlos->Retirar(10); 
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n"; 