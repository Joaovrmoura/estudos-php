<?php

class GetLista{
    public function tarefas($pdo){
        try{
            $stmt = $pdo->query("SELECT * FROM lista");
            $stmt->execute();

            if($stmt->rowCount() > 0){
                return  $stmt->fetchAll(PDO::FETCH_OBJ); 
            }else{
                return [];
            }
        }catch(PDOException $e){
            echo "Error" . $e->getMessage();
        }
      
       
    }
}