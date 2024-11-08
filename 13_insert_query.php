<?php

include "01_connect.php";

$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, 
PDO::FETCH_ASSOC);

$empName = "joao";
$place = "rodrigues";
$age = 26;
$dob = 1990;

$insert_query = $con->prepare("INSERT INTO employee_data 
(emp_name, emp_place, emp_age, emp_dob) 
VALUES (:emp_name, :emp_place, :emp_age,:emp_dob)");

$insert_query->execute([
    ':emp_name'=>$empName, 
    ':emp_place'=>$place,       
    ':emp_age'=>$age, 
    ':emp_dob' =>$dob
    ]);