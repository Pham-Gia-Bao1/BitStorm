<?php

include_once("../Model/BlogModel.php");
include_once("../Model/AccountModel.php");
include_once("../Model/ConnectDataBase.php");

class News extends Connection {
    public function get_all_news() {

        $this->connect_database();
        $sql_query = "SELECT * FROM `news` LEFT JOIN author ON news.author_id = author.author_id;";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $news;
    }
    function getNews(int $id) : array
    {
        global $connection;
        $statement = $connection->prepare("select * from news where id = :id");
        $statement->execute([':id' => $id]);
        return $statement->fetch();
    }
}

