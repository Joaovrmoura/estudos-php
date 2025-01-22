<?php
    session_start();
    require '../model/class.php';
    
    $all_contacts = ContatoInfo::get_all_Contact($conn);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['edit'])){
             $_SESSION['id'] = $_POST['id'];
            header('location: actions/edit.php');
        } elseif (isset($_POST['delete'])){
            $id = $_POST['id'];
            $delete = ContatoInfo::delete_contact($conn, $id);
            header('location: home.php');
    
        } elseif (isset($_POST['add'])) {
            header('location: ./actions/add.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .contact-grid {
           width: 100%;
        }
        .contact-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            transition: transform 0.3s ease;
        }
        .contact-card:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .contact-card h2 {
            margin-top: 0;
            color: #007bff;
            border-bottom: 1px solid #007bff;
            padding-bottom: 5px;
        }
        .contact-info {
            margin-bottom: 10px;
        }
        .contact-info strong {
            color: #555;
            margin-right: 10px;
        }
        /* .contactsContainer{
            background-color: red;
            width: 100%;
        } */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e6e6e6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Directory</h1>
        <div id="contactsContainer" class="contact-grid">
            <!-- Contacts will be dynamically inserted here -->
        <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>editar</th>
                <th>Adicionar</th>
                <th>excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($all_contacts as $contact) : ?>
            <tr>
                <td><?= $contact->name ?></td>
                <td><?= $contact->email ?></td>
                <td><?= $contact->phone ?></td>
                <td><?= $contact->address ?></td>
                <form action="<?= ROOT_URL ?>home.php" method="POST">
                    <input type="hidden" name="id" value="<?= $contact->id ?>">
                    <td><button type="submit" name="edit">Editar</button></td>
                    <td><button type="submit" name="add">Adicionar</button></td>
                    <td><button type="submit" name="delete">Excluir</button></td>
                </form>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

        </div>
    </div>
</body>
</html>