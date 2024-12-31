<!-- Exercício 01: Crie uma classe chamada Invoice que possa ser utilizado por uma loja de 
suprimentos de informática para representar uma fatura de um item vendido na loja. 
Uma fatura deve incluir as seguintes informações como atributos

número do item faturado,
descrição do item
quantidade comprada do item
preço unitário do item
Sua classe deve ter um construtor que inicialize os quatro atributos. Se a quantidade não 
for positiva, ela deve ser configurada como 0. Se o preço por item não 
for positivo ele deve ser configurado como 0.0. Forneça um método set e 
um método get para cada variável de instância. Além disso, forneça 
um método chamado 
getInvoiceAmount que calcula o valor da fatura (isso é, multiplica a 
quantidade pelo preço por item) e depois retorna o valor. -->

<?php


class Invoice{
    private $item;
    private $description;
    private $quantity;
    private $price;

    public function __construct($item, $description, $quantity, $price){
        $this->setItem($item);
        $this->setdescription($description);
        $this->setQuantity($quantity);
        $this->setPrice($price);
    }

    //itens
    public function getItem(){ return $this->item; }
    public function setItem($i){$this->item = $i; }

    //descrição
    public function getdescription(){return $this->description;}
    public function setdescription($d){ $this->description = $d; }

    //quantidade
    public function getQuantity(){return $this->quantity;}
    public function setQuantity($q){ $this->quantity = $q < 0 ? 0 : $q; }
    
    //preco
    public function getPrice(){return $this->price;}
    public function setPrice($p){$this->price = $p < 0 ? 0 : $p; }

    public function getInvoiceAmount(){
        return $this->getQuantity() * $this->getPrice();
    }

}

$loja = new Invoice('macarrão', 
'macarrão cabelo de anjo', 
-1, 
22.50);

echo "<pre>";
var_dump($loja);
echo "</pre>";

echo $loja->getInvoiceAmount();
