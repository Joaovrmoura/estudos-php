<?php


// O método __construct é inicializado toda vez que instanciamos 
    // uma classe
class login{
    private $email;
    private $senha;
    private $nome;
   
    public function __construct($email, $senha, $nome){
        // pegamos os valores passados por parâmtro e
        // atribuimos a uma variável
        $this->nome = $nome;
        // reaproveitando os métodos setter
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        // filtrei o email
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($e){
        $this->senha = $e;
    }
    public function logar(){
        if($this->email == "test@.com" 
        and $this->senha == "123"): 
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos!";
        endif;
    }
}
// usando o __construct passamos parâmetros 
// para o novo objeto da classe 
$dados = new Login("test()//@.com",
 "123", "joao Victor");
echo $dados->getNome();
echo "<br>";
$dados->logar();



