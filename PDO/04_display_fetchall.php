<?php


include '01_connect.php';

$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$fetch_records = $con->query("SELECT * FROM employee_data");

// fetch_all retorna tudo que estiver dentro do banco de dado
// em unico array => $row 
$row = $fetch_records->fetchAll();
if(count($row) > 0){
    // acessa cada array dentro do array principal 
    // em forma de array
    foreach($row as $value){
        echo "<pre>";
        print_r($value);
        echo "</pre>";
        // acessa o valor dentro de cada array
        foreach($value as $values){
            echo $values;
            echo "<br>";
        }
    }
}else{
    echo "Not found";
}
   
