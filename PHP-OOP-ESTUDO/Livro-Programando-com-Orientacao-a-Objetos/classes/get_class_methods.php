<?php
class Funcionario {
    var $Codigo; 
    var $Nome; 
    var $Salario = 586; 
    var $Departamento= 'Contabilidade'; 
    function SetSalario() {}
    function GetSalario() {}
    function SetNome() { } 
    function GetNome() { } 
    
}
class Estagiario extends Funcionario{
    var $bolsa;
    var $salario;
}

$jose = new Funcionario; 
$maria = new Estagiario;
echo get_parent_class($maria); 
echo "<br>";
// retorna o nome da classe pai pois passei o nome da classe herdada de Funcionario
echo get_parent_class('estagiario'); 
echo "<br>";
// retorna o nome da classe da qual o objeto pertence
echo get_class($jose); 
echo "<br>";
// pega as propriedades do objeto
print_r(get_class_vars('Funcionario')); 
echo "<br>";
print_r(get_class_methods('Funcionario')); 

echo "<br>";



function minhaFuncao(){
    echo "executa minha função";
}

call_user_func('minhafuncao');




// saber se o método existe dentro do objeto

if(method_exists($jose, 'setNome')){
    echo 'Objeto Jose possui método SetNome()' . "<br>"; 
}else{
    echo 'Objeto Jose possui método SetSalario()' . "<br>"; 
}
?> 