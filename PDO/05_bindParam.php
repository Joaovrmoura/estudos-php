<?php

include "01_connect.php";

$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, 
PDO::FETCH_ASSOC);

$place = 'souza';
$id = 1;

$fetch_records = $con->prepare("SELECT * FROM 
employee_data WHERE emp_place=? OR
emp_id=?");

$fetch_records->bindParam(1,$place, 
PDO::PARAM_STR);
$fetch_records->bindParam(2,$id, 
PDO::PARAM_INT);
$fetch_records->execute();

$row=$fetch_records->fetchAll();
echo "<pre>";
print_r($row);
echo "</pre>";