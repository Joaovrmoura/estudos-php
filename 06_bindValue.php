<?php

include "01_connect.php";

$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, 
PDO::FETCH_ASSOC);


$fetch_records = $con->prepare("SELECT * FROM 
employee_data WHERE emp_place=?");

// $fetch_records->bindValue(1,'rodrigues', 
// PDO::PARAM_STR);
// $fetch_records->execute();

// $row=$fetch_records->fetchAll();
// echo "<pre>";
// print_r($row);
// echo "</pre>";




$place = 'souza';
$name = 'pedrita';
$fetch_records = $con->prepare("SELECT * FROM 
employee_data WHERE emp_place=? and emp_name=?");
// $fetch_records->execute(array($place));
$fetch_records->execute([$place, $name]);

$row=$fetch_records->fetchAll();
echo "<pre>";
print_r($row);
echo "</pre>";



// $fetch_records = $con->prepare("SELECT * FROM 
// employee_data WHERE emp_place=?");

// $fetch_records->bindValue(1,'lima', 
// PDO::PARAM_STR);
// $fetch_records->execute();

// $row=$fetch_records->fetchAll();
// echo "<pre>";
// print_r($row);
// echo "</pre>";