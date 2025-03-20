<?php 


function connection(){
    try{
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'blog';

        $conn = mysqli_connect(
            $host, 
            $user,
            $password, 
            $dbname
        );
        return $conn;
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

$conn = connection();
$rowsCLients = mysqli_query($conn, "SELECT * FROM users");

while($rows = mysqli_fetch_assoc($rowsCLients)){
    echo $rows['firstname'];
}