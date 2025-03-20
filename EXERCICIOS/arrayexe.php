<?php

$n_v = [];
$menor_v = -1;
$maior_v = 0;
$cont_par = 0;
$total = 0;

for($i = 0; $i < 20; $i++){
    $rand = rand(1, 10);
    $n_v[] = $rand;
    
    $total += $n_v[$i];
    
    if($menor_v == -1 || $menor_v > $n_v[$i]){
        $menor_v = $n_v[$i];
    }
    if($maior_v < $n_v[$i]){
        $maior_v = $n_v[$i];
    }
    if($n_v[$i] %2 == 0){
        $cont_par++;
    }
}


$tamanho = count($n_v);
$percentual = ($cont_par * 100 ) / $tamanho;
echo "\n";
echo "Menor Número: ".  $menor_v . "\n";
echo "Maior número: " . $maior_v . "\n";
echo "Percentual de Pares: ". number_format($percentual, 2) . "\n";
echo "Média dos Números: ". number_format($media = $total / $tamanho, 2) ."\n";

?>

<!-- Criar um vetor com 20 elementos inteiros. 
Imprimir o maior e o menor, sem ordenar, o 
percentual de números pare e média dos 
elementos do vetor  -->
