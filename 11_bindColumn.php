<?php

include '01_connect.php';

$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// $place = 'souza';
// $fetch_records = $con->prepare("SELECT * FROM
// employee_data WHERE emp_place=? and emp_name=?");

// $fetch_records->bindParam(1,$place, 
// PDO::PARAM_STR);
// $fetch_records->execute();

// $row=$fetch_records->fetchAll();
// echo "<pre>";
// print_r($row);
// echo "</pre>";


$fetch_records = $con->prepare("SELECT emp_name,
emp_place, emp_age FROM employee_data");

// # Acessa colunas 
// Exemple 1
// $fetch_records->bindColumn('emp_name',$userName);
// $fetch_records->bindColumn('emp_place',$sobrenome);
// $fetch_records->bindColumn('emp_age',$age);
// $fetch_records->execute();

// Exemple 2
// Podemos associar as variaeis a valores do banco colocando 
// na ordem correta

// os numeros representam a posição dos parâmetros
$fetch_records->bindColumn(1,$userName);
$fetch_records->bindColumn(2,$sobrenome);
$fetch_records->bindColumn(3,$age);
$fetch_records->execute();


while($row=$fetch_records->fetch()){
    echo $userName;
    echo "<br>";
    echo $sobrenome;
    echo "<br>";
    echo $age;
    echo "<br>";
}


