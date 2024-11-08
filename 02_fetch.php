<?php


include '01_connect.php';

$fetch_records = $con->query("SELECT * FROM employee_data");

// $fetch_records->fetch()`, que por padrão retorna o 
// $row = $fetch_records->fetch();
// echo "<pre>";
// print_r($row);
// echo "</pre>";

// while($row = $fetch_records->fetch()){
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
// }

// --- Recuperar múltiplos registros como arrays associativos ---
// usa `PDO::FETCH_ASSOC` como argumento do `fetch()`. Isso faz com
// que cada registro seja retornado apenas como 
// um array associativo (chaves com nomes das colunas).

while($row = $fetch_records->fetch(PDO::FETCH_ASSOC)){
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

// Retorna um array que só pode ser acessado por indexs numéricos
while($row = $fetch_records->fetch(PDO::FETCH_NUM)){
    echo $row[0];
    echo $row[1];
    echo $row[2];
    echo $row[3];
    echo $row[4];
    echo "<br>";
}

// Retorna um array que pode ser acessado por indexs numéricos 
// ou pelo valor da chave do array
while($row = $fetch_records->fetch(PDO::FETCH_BOTH)){
    echo $row[0];
    echo $row[1];
    echo $row[2];
    echo $row[3];
    echo $row[4];
    echo "<br>";
    echo $row['emp_id'];
    echo $row['emp_name'];
    echo $row['emp_place'];
    echo $row['emp_age'];
    echo $row['emp_dob'];
    echo "<br>";
}

// Exibe o valor da coluna 'emp_id' do registro atual, 
// acessando-a como uma propriedade do objeto.
while($row = $fetch_records->fetch(PDO::FETCH_OBJ)){
    echo $row->emp_id;
    echo $row->emp_name;
    echo $row->emp_place;
    echo $row->emp_age;
    echo $row->emp_dob;
    echo "<br>";
}

while($row = $fetch_records->fetch(PDO::FETCH_ASSOC)){
    echo $row['emp_id'];
    echo $row['emp_name'];
    echo $row['emp_place'];
    echo $row['emp_age'];
    echo $row['emp_dob'];
    echo "<br>";
}

?>
