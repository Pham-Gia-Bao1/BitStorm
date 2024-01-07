<?php
include_once("../Model/ConnectDataBase.php");

class User extends Connection
{
    public function get_all_users()
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM users WHERE role_id = 2";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getUser($id)
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $users = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $users;
    }

    public function createUser($name, $email, $password, $phone_number, $img)
    {
        $this->connect_database();
        $sql_query = "INSERT INTO users (name, email, password, phone_number, img, role_id) 
                  VALUES (:name, :email, :password, :phone_number, :img, 2)";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':phone_number', $phone_number);
        $success = $stmt->execute();
        $this->closeConnection();
        return $success;
    }

    public function updateUser($id, $name, $email, $password, $phone_number, $img)
    {
        $this->connect_database();
        $sql_query = "UPDATE users SET name = :name, email = :email, password = :password, phone_number = :phone_number, img = :img WHERE id = :id";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":phone_number", $phone_number);
        $stmt->bindParam(":img", $img);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $this->closeConnection();
        return true;
    }


}
