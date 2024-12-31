<?php


include '01_connect.php';
// $con->setAttribute: Este método define um atributo para o objeto PDO ($con), 
// permitindo configurar comportamentos específicos da conexão.
// PDO::ATTR_DEFAULT_FETCH_MODE: Esse atributo determina o modo de 
// busca padrão para os resultados de consultas feitas com este objeto de conexão.

$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$fetch_records = $con->query("SELECT * FROM employee_data");

// Posso paddar o fetch ou fetchAll sem parametro,
// pois já esta sendo atribuido no setAttribute-> PDO::FETCH_ASSOC


// fetchAll retorna tudo em arrays dentro de um unico array, com todos
// os dados encontrados 
// $row = $fetch_records->fetchAll(PDO::FETCH_ASSOC);
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
     // busca dentro
    // echo $row[0]['emp_name'];


// $row = $fetch_records->fetchAll(PDO::FETCH_NUM);
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
//     echo $row[0][1];


// $row = $fetch_records->fetchAll(PDO::FETCH_BOTH);
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
//     echo $row[0]['emp_name'];    
//     echo $row[0][2];

// $row = $fetch_records->fetchAll(PDO::FETCH_OBJ);
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
//     echo $row[0]->emp_dob;