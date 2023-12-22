<?php
include "../Config/config.php";
class Connection{
    protected  $host = DB_HOST ;
    protected $username = DB_USER;
    protected $password = '';
    protected $dbName = DB_NAME;
    protected $conn;
    public function connect_database()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
    public function closeConnection()
    {
        $this->conn = null;
    }
}