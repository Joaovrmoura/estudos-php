<?php

try {

    $db_name = "mysql:host=localhost;
    dbname=pdo_tutorial";
    $username = "root";
    $password = '';
    // não preciso criar para cada opção
    // que desejo usar o $con->setAttribute ele é passado direto na variavel
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $con = new PDO(
        $db_name,
        $username,
        $password,
        $options
    );

    $fetch_records = $con->query("SELECT * FROM employee_data");
    $row = $fetch_records->fetchAll();
    echo "<pre>";
    print_r($row);
    echo "</pre>";

} catch (PDOException $e) {
    echo $e->getMessage();
}
