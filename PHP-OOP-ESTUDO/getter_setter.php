<?php



// Motivos para usar o setter é que 
// podemos filtrar valores e criar ações

class logar{
    private $email;
    private $senha;

    // pega o atributo privado da classe
    public function getEmail(){
        return $this->email;
    }
    // passa o atributo pego antes no get 
    // passa esse atributo para uma variável
    public function setEmail($e){
        // filtrei o email
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    // pega a senha do atributo privado passa para o setter
    public function getSenha(){
        return $this->senha;
    }
    // Transforma esse atributo em uma variável
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
// logar é um objeto
$dados = new Logar();

//Acessa o set ao invés de 
//diretamente a variável
$dados->setEmail("test()//@.com");
$dados->setSenha("123");
$dados->logar();
echo "<br>";
// acessando os valores do 
// getter dos objetos private
echo $dados->getEmail();
echo $dados->getSenha();