<?php


include "01_connect.php";

// $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, 
// PDO::FETCH_ASSOC);

$fetch_records = $con->prepare("SELECT * FROM employee_data");
$fetch_records->execute();

// Encontra os quantidades de colunas da tabela do banco
// o numero passado como parâmetro acessa os valores da 3 coluna da tabela
$row = $fetch_records->fetchAll(PDO::FETCH_COLUMN, 1);

echo "FETCH_COLUMN";
echo "<pre>";
print_r($row);
echo "</pre>";
echo "<br>";
echo "<br>";


// FETCH_GROUP
echo "FETCH_GROUP";
$fetch_records2 = $con->prepare("SELECT emp_name, 
emp_place FROM employee_data");
$fetch_records2->execute();

$row2 = $fetch_records2->fetchAll(PDO::FETCH_GROUP);

echo "<pre>";
print_r($row2);
echo "</pre>";
echo "<br>";
echo "<br>";

// FETCH_UNIQUE
echo "FETCH_UNIQUE FETCH_KEY_PAIR";
$fetch_records2 = $con->prepare("SELECT emp_place, 
emp_name FROM employee_data");
$fetch_records2->execute();

// não é possível fazer a busca de tudo 
// dentro do banco EX: SELECT * FROM ...
$row3 = $fetch_records2->fetchAll(
PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);

// $row2 = $fetch_records2->fetchAll
// (PDO::FETCH_KEY_PAIR);

echo "<pre>";
print_r($row2);
echo "</pre>";


// FETCH_OBJ
echo "FETCH_CLASS or FETCH_OBJ";
$fetch_records2 = $con->prepare("SELECT emp_place, 
emp_name FROM employee_data");
$fetch_records2->execute();

$row2 = $fetch_records2->fetchAll
(PDO::FETCH_CLASS);
// $row2 = $fetch_records2->fetchAll
// (PDO::FETCH_OBJ);

echo "<pre>";
print_r($row2);
echo "</pre>";
