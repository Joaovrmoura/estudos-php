<?php 
    session_start();
   

    if(isset($_POST['tarefa']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        include_once "../config/Connection.php";
        $conn = new Connection();
        $pdo = $conn::connect();

        $output = "";
        $stmt = $pdo->query("SELECT * FROM lista");
        $stmt->execute();

        try{
            if($stmt->rowCount() > 0){
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    if($row){
                        $output .= '<li class="li"> <p>'. $row['tarefa'] .'</p>
                        <div class="results">
                            <a href="#" class="delete">Delete</a>
                            <a href="#" class="edit">Editar</a>
                        </div>
                        </li>';
                    }else{
                        $output .= '<li> <p>'. $row['tarefa'] .'</p>
                                    </li>';
                    }
                }
            }else{
                $output .= '<li> <p>Nenhuma tarefa adicionada</p>
                        <div class="results">
                            <a href="#" class="delete">Delete</a>
                            <a href="#" class="edit">Editar</a>
                        </div>
                        </li>';
            }
            echo $output;
        }catch(PDOException $e){
            die("Erro") . $e->getMessage();
        }
        
    }
       
?>