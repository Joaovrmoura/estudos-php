<?php

    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
        $voto = $_POST['options'];

        if(!isset($_SESSION['voto'])){
            $_SESSION['voto'] = [
                "joao" => 0,
                "maria" => 0,
                "pedro" => 0
            ];
            $_SESSION['voto'][$voto]++;
        }else{
            $_SESSION['voto'][$voto]++;
        }

       echo "<pre>";
       var_dump($_SESSION['voto']);
       echo "</pre>";
    }
    
    if(isset($_POST['clearSession'])){
        session_destroy();
        unset($_SESSION['voto']);
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
 <h1>
    Vote no candidato!
    <?php if(isset($_SESSION['voto'])) : ?>
    <?php foreach($_SESSION['voto'] as $key => $value) : ?>
        <p><?= $key  . " " . $value ?></p>
    <?php endforeach ?>
    <?php endif ?>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <select name="options" id="">
            <option value="maria">Maria</option>
            <option value="joao">Joao</option>
            <option value="pedro">Pedro</option>
        </select>
        <button type="submit" name="submit">Enviar</button>
        <button type="submit" name="clearSession">Limpar sessão!</button>
    </form>
 </h1>
</body>
</html>