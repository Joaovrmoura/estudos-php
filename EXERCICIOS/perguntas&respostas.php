<?php
# Exercício - sistema de perguntas e respostas
#as perguntas devem ter opções começando do zero
#o usuario deve escolher a resposta certa baseado no 
# indice que contem a resposta
#exemplo
#0) reposta 1
#1) resosta 2
#2) reposta 3 ...
#se acertar retornar acertou || errou se errar
#contar acertos 

$perguntas = [
    [
        'Pergunta' => 'Quanto é 2+2?',
        'Opções' => ['1', '3', '4', '5'],
        'Resposta' => '4',
    ],
    [
        'Pergunta' => 'Quanto é 5*5?',
        'Opções' => ['25', '55', '10', '51'],
        'Resposta' => '25',
    ],
    [
        'Pergunta' => 'Quanto é 10/2?',
        'Opções' => ['4', '5', '2', '1'],
        'Resposta' => '5',
    ],
];


$countAcertos = 1;
foreach ($perguntas as $pergunta) {
    echo $pergunta['Pergunta'];
    foreach ($pergunta['Opções'] as $key => $op) {
        echo "\n" . $key . ') ' . $op;
        if($op == $pergunta['Resposta']){
            $respostaCerta = $key;
        }
    }
    echo "\n";
    $resposta = readline('Qual a opção correta?');
    if($resposta == $respostaCerta){
       echo "\n". "voce acertou miseravel! " . 
       $countAcertos++ . " de 3" . "\n";
    }
}