<?php
class Connection{
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $dbName = 'DATA_PHP';
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