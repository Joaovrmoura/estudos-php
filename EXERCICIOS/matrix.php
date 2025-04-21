<?php


$matriz = [];

for($i = 0; $i < 2; $i++){
    for($j = 0; $j < 2; $j++){
       $matriz[$i][$j] = readline("Preencha a matrix no indice {$i} {$j}: ");
    }
    echo "\n";
}

for($i = 0; $i < 2; $i++){
    for($j = 0; $j < 2; $j++){
       echo $matriz[$i][$j] . "\t";
    }
    echo "\n";
}
