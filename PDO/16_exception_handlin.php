<?php

try {

    $db_name = "mysql:host=localhost;
    dbname=pdo_tutorial";
    $username = "root";
    $password = '';

    $con = new PDO($db_name, $username, 
    $password);

} catch (PDOException $e) {
    echo $e->getMessage();
}
