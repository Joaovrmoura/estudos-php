<?php

session_start();
header('Content-Type: application/json; charset=utf-8');
require_once '../config/Connection.php';
$conn = new Connection();
$pdo = $conn::connect();
// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tarefa'])) {
    // Obtém os dados do corpo da requisição
        $tarefa = $_POST['tarefa'];
        try{
            
            $stmt = $pdo->prepare("INSERT INTO lista (tarefa) VALUES (:tarefa)");
            $stmt->execute([':tarefa' => $tarefa]);
            $message = trim(" Adicionado com sucesso! "); // Remove espaços extras
            echo json_encode(['success' => true, 'message' => $message]);
            
        }catch(PDOException $e){
             error_log($e->getMessage() . "\n", 3, "error.log");
            echo json_encode(['success'=> false, 'message'=> 'Erro ao adicionar tarefa ao banco']);
        }
        
    } else {
        echo json_encode(['success'=> false, 'message'=> 'erro na requisição!']);
}
