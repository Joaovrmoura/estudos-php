<?php

require_once '../config/Connection.php';
$conn = new Connection();
$pdo = $conn::connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>

<body>
    <?php if(isset($_SESSION['success'])) : ?>
        <p>
            <?= $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </p>
    <?php elseif(isset($_SESSION['error'])) : ?>
        <p>
            <?= $_SESSION['error'];
                unset($_SESSION['error']);
            ?>
        </p>
    <?php endif ?>

    <div class="container">
        <h1>Adicione tarefas!</h1>
        <form class="form" action="" method="POST">
            <input type="text" class="tarefa" name="tarefa" placeholder="Adicione uma tarefa">
            <button type="submit" class="btn" name="btn">Adicionar</button>
        </form>

        <h2>Suas Tarefas</h2>
        <div class="mostrarTarefa">
            <ul class="show" id="taskList">
            
            </ul>
        </div>
    </div>

    <script src="./js/fetch.js"></script>
</body>

</html>
