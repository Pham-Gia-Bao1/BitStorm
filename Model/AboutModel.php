<?php
include_once ("../Controller/AboutController.php");
include_once ("../Model/ConnectDataBase.php");
class About extends Connection {
    public function showExpert(){
        $db = $this->connect_database();
        $stmt = $db->prepare("SELECT * FROM experts ORDER BY RAND() LIMIT 3");
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }
}