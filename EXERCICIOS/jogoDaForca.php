<?php

$secret_word = "London";
$replace_word = "";

for($i = 0; $i < strlen($secret_word); $i++){
    $replace_word[$i] = "x";
}

function verifyLetter(){
    while(true){
        $letter = strtolower(readline("Digite uma letra e tente acertar: "));

        if(strlen($letter) != 1 || intval($letter)){
            echo "Digite apenas uma letra!" . "\n";
            continue;
        }else{
            return $letter;
        }
    }
}

function isWin($i, $secret_word, $replace_word){
    if($i + 1 === strlen($secret_word) && $replace_word != strtolower($secret_word)){
        echo "Você perdeu";
        return true;
    }
    if($replace_word === strtolower($secret_word)){
        echo "Você ganhou com {$i} tentativas";
        return true;
    }
    return false;
}

for($i = 0; $i < strlen($secret_word); $i++){
    echo $replace_word . "\n";

    if(isWin($i, $secret_word, $replace_word) === true) break;

    $letter = verifyLetter();
   
    for($j = 0; $j < strlen($secret_word); $j++){

        if($letter === strtolower($secret_word[$j])){
            if($replace_word[$j] != $letter){
                $i--;
                $replace_word[$j] = $letter;
            }else{
                echo "voce já digitou esse letra!";
            }
        }
    }
}

