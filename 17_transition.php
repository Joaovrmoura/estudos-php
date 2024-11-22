<?php

try {

    $db_name = "mysql:host=localhost;
    dbname=pdo_tutorial";
    $username = "root";
    $password = '';

    $con = new PDO($db_name, $username, 
    $password);
    
    $con->beginTransaction();

    // Insert query
    $insert = $con->prepare("INSERT INTO users 
    (username, email) VALUES (?, ?)");
    //update query
    $update = $con->prepare("UPDATE account_balance SET 
    balance=balance+50 WHERE id=?");

    $insert->execute(['kratos', 'kratos@gmail.com']);
    $update->execute([2]);
    
    $con->commit();
    echo "transistion with Successfully";

} catch (Exception $e) {
    $con->rollBack();
    echo "Transition Got failed " . 
    $e->getMessage();
}
