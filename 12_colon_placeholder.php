<?php 

include "01_connect.php";

$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, 
PDO::FETCH_ASSOC);

$place='lima';
$name='joao';

$fetch_records1 = $con->prepare("SELECT * FROM employee_data 
WHERE emp_place=? and emp_name=?");

// parametro passado diretamente dentro da execução
$fetch_records1->execute([$place, $name]);

$row1 = $fetch_records1->fetchAll();
echo "<pre>";
print_r($row1);
echo "</pre>";


/// ################################
$place='lima';
$name='joao';

$fetch_records2 = $con->prepare("SELECT * FROM employee_data 
WHERE emp_place=:place and emp_name=:name");

//Utilizando o :name na pesquisa do banco podemos acessar 
// o valor no bindValue pelo nome
$fetch_records2->bindValue(':place', $place);
$fetch_records2->bindValue(':name', $name);
$fetch_records2->execute();

$row2 = $fetch_records2->fetchAll();
echo "<pre>";
print_r($row2);
echo "</pre>";


/// ################################
$place= 'lima';
$name='joao';
$fetch_records = $con->prepare("SELECT * FROM employee_data 
WHERE emp_place=:place and emp_name=:name");

// array associatvo
$fetch_records->execute([':place'=>$place, ':name'=>$name]);

$row = $fetch_records->fetchAll();
echo "<pre>";
print_r($row);
echo "</pre>";