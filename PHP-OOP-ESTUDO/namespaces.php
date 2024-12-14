<?php

require 'classes/produto.php';
require 'models/produto.php';

// Outra forma de acessar a classe pelo namspace
// Aqui só podemos utilizar um namespace por script
// use models\Produto;

// usando apelidos podemos usar diferentes namespaces
use models\Produto as productModel;

// NameEspaces serve para resolver conflitos
// com nome das classes

// Acessando a classe da pasta classes com
// o namespace definido dentro do script

//acessando com o use com ALIÁs(APELIDO)
$produto = new productModel();
$produto->mostrarDetalhes();
echo "<br>";
// Acessei diretamente dentro da classe
$produto2 = new classes\Produto();
$produto2->mostrarDetalhes();