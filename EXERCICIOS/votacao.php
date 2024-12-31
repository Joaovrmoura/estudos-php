<?php

//sessions e arrays associativos
@session_start();

if(isset($_POST['submit'])){
    // se ainda mão existe o array associativo vou cria-lo(ele não existe)
    if(!isset($_SESSION['votos'])){
        // crio um array com as opções de voto(elas têm que existir para associar chave e valor)
        $_SESSION['votos'] = 
        [
            'joao' => 0,
            'maria' => 0,
            'pedro' => 0
        ];
    }
    // valido se existe algum voto enviado e associo a uma variável
    if(isset($_POST['vote'])){
        $voto = $_POST['vote'];
    }
    // valido se existe a session(que eu criei e sei que existe)! e conto os votos
    if(isset($_SESSION['votos'][$voto])){
        // acesso o array a chave igual ao voto($voto = 'joao') 
        // joao = chave do array, incremento o valor da chave joão que primeiramente era zero
        $_SESSION['votos'][$voto]++;
    }
}


if(isset($_POST['cleanSession'])){
    session_destroy();
    unset($_SESSION);
}
   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vote no seu candidato!</h1>
    <?php if(isset($_SESSION['votos'])) { ?>
         <?php foreach($_SESSION['votos'] as $key => $value) : ?>
            <p>
               <?= $key .' votos: '. $value ?> 
            </p>
            <?php endforeach ?>
    <?php } ?>
   
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <select name="vote" id="">
            <option value="maria">Maria</option>
            <option value="joao">Joao</option>
            <option value="pedro">Pedro</option>
        </select>
        <button type="submit" name="submit">Enviar</button>
        <button type="submit" name="cleanSession">Limpar seção</button>
    </form>
</body>
</html>