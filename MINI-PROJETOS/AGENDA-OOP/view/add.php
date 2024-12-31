<?php

require '../database/class.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $create = new ContatoInfo(
    $name, 
    $email,
    $address,
    $phone);
    
    $create->addContact( $conn);
    $_SESSION['success'] = 'Adicionado com sucesso';
    header('location:../home.php');
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
        .btn-edit { background-color: #ffc107; }
        .btn-delete { background-color: #dc3545; }
        #contactList {
            margin-top: 20px;
        }
        .contact-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>

<!-- 
 foreach($get_all as $contats){
        $set_contact = ContatoInfo::setContact(
        $conn, 
        $id, 
        $contats->name,
        $contats->email,
        $contats->address, 
        $contats->phone);
    }
    -->
    
    <div class="container">
        <h1>Editar Contato</h1>
        <form id="contactForm" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="hidden" id="contactId">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name"required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
            </div>
            <button type="submit" class="btn">Save Contact</button>
        </form>
        <div id="contactList"></div>
    </div>
</body>
</html>