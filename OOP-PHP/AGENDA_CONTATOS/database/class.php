<?php

require "conn.php";
$conn = Connection::Getconn();

class ContatoInfo{

    private $id, $name, $email, $address, $phone;
    public function __construct($name, $email, $address, $phone){
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function AddContact($conn){
        $sql = $conn->prepare("INSERT INTO contacts (name, email, 
        phone, address) VALUES (:name,:email, :phone, :address)"); 
        return $sql->execute([
            ':name' => $this->name,
            ':email'=> $this->email, 
            ':address'=> $this->address, 
            ':phone'=> $this->phone
        ]);
    }

    public static function get_all_Contact($conn){
        $query = $conn->query("SELECT * FROM contacts");
        $row = $query->fetchAll(PDO::FETCH_OBJ);
        if(count($row) > 0){
            return $row;
        }else{
            echo "Não existem dados";
        }
    }
    public static function setContact($conn, $id, $name, $email, $address, $phone){
        $set_query = $conn->prepare("UPDATE contacts set name=?, email=?,
        phone=?, address=? WHERE id=?");
        $set_query->bindParam(1, $name);
        $set_query->bindParam(2, $email);
        $set_query->bindParam(3, $phone);
        $set_query->bindParam(4, $address);
        $set_query->bindParam(5, $id);
        return $set_query->execute();
    }
    public static function delete_contact($conn, $id){
        $del_query = $conn->prepare("DELETE FROM contacts WHERE id=?");
        $del_query->bindParam(1, $id);
        return $del_query->execute();
    }
}

class IdSearch extends ContatoInfo{
    
    public static function search($conn, $id){
        $query = $conn->prepare("SELECT * FROM contacts WHERE id=?");
        $query->bindParam(1, $id);
        $query->execute();
        $row = $query->fetchAll(PDO::FETCH_OBJ);
        return $row ?: null;
    }
}
