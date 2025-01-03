<?php

include_once './classes/Product.class.php';


$produtol = new Product; 
$produto2 = new Product; 

$produtol->Codigo = 4001; 
$produtol->Descricao = 'CD - The Best of Eric Clapton'; 
$produto2->Codigo = 4002; 
$produto2->Descricao = 'CD - The Eagles Hotel California'; 


$produtol->ImprimeEtiqueta(); 
$produto2->ImprimeEtiqueta(); 