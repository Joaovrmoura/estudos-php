<?php 

// Levantando exceções em php 
class Newsletter{
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            // Similar ao raise em python
            throw new Exception("Este Email é inválido", 121);
        }else{
            echo "Cadastrado com sucesso";
        }
    }
}

$email = new Newsletter();

try{
    $email->cadastrarEmail("joaovrmoura2");
}catch(Exception $e){
    echo "Erro: " . $e->getMessage() . "<br>";
    echo "Código: " . $e->getCode() . "<br>";
    echo "Linha: " . $e->getLine() . "<br>";
    echo "Arquivo: " . $e->getFile() . "<br>";
}

