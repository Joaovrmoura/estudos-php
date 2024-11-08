<?php

include "01_connect.php";

$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, 
PDO::FETCH_ASSOC);

echo "rowCount";
$fetch_records = $con->prepare("SELECT * FROM 
employee_data WHERE emp_place='souza'");
$fetch_records->execute();

// Conta o numero de arrays encontrados
echo $fetch_records->rowCount();

$row= $fetch_records->fetchAll();

echo "<pre>";
print_r($row);
echo "</pre>";




echo "Método mostra o id do item adicionado";
echo "InsertLastInsertId()";
echo "<br>";

$empName = "suman";
$place = "chennei";
$age = 36;
$dob = 1990;

$insert_query = $con->prepare("INSERT INTO employee_data 
(emp_name, emp_place, emp_age, emp_dob) 
VALUES (:emp_name, :emp_place, :emp_age,:emp_dob)");

// $insert_query->execute([
//     ':emp_name'=>$empName, 
//     ':emp_place'=>$place,       
//     ':emp_age'=>$age, 
//     ':emp_dob' =>$dob
//     ]);

// //retorna o id adicionado no insert   
// echo $con->lastInsertId();
echo "10";


echo "<br>";
echo "<br>";
echo "UPDATE";
echo "<br>";
$fetch_records =" UPDATE employee_data SET 
emp_name='vt' WHERE emp_name='wave'";
//Retorna o número de mudanças no naco de dados
$result = $con->exec($fetch_records);
echo $result;

// $row= $fetch_records->fetchAll();
// echo "<pre>";
// print_r($row);
// echo "</pre>";
