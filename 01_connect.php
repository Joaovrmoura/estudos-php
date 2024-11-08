<?php

$db_name = "mysql:host=localhost;dbname=pdo_tutorial";
$username = "root";
$password = '';

try {
    
    $con = new PDO($db_name, $username,
     $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){
    echo "ERRO na Conexão com Banco" . $e->getMessage();
}
