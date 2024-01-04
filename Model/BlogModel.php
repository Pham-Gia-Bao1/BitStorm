<?php
include_once("../Model/ConnectDataBase.php");
class Blog extends Connection
{
    public function getProducts()
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM videos LIMIT 6";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $products;
    }
    public function getPodcast()
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM podcasts LIMIT 6";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $podcasts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $podcasts;
    }
    public function get_video_type_dong_luc()
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM videos WHERE type = 'động lực'";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $videos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $videos;
    }
    public function get_video_type_tinh_yeu()
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM videos WHERE type = 'tình yêu'";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $videos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $videos;
    }
    public function get_video_type_gia_dinh()
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM videos WHERE type = 'gia đình'";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $videos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $videos;
    }
    public function get_video_type_thien_nhien()
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM videos WHERE type = 'thiên nhiên'";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $videos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $videos;
    }
    public function find($searchTerm = '')
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM videos";

        if (!empty($searchTerm)) {
            $searchTerm = '%' . $searchTerm . '%';
            $sql_query .= " WHERE title LIKE :searchTerm";
            $stmt = $this->conn->prepare($sql_query);
            $stmt->bindParam(':searchTerm', $searchTerm);
            $stmt->execute();
        } else {
            return null;
        }
        $videos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $videos;
    }
    public function getVideoTitlesBySearchTerm($searchTerm)
    {
        $this->connect_database();
        $sql_query = "SELECT title FROM videos WHERE title LIKE :searchTerm LIMIT 6";
        $stmt = $this->conn->prepare($sql_query);
        $searchTerm = '%' . $searchTerm . '%';
        $stmt->bindParam(':searchTerm', $searchTerm);
        $stmt->execute();
        $titles = $stmt->fetchAll(PDO::FETCH_COLUMN);
        $this->closeConnection();
        return $titles;
    }
    public function get_videos_by_bmi($bmi)
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM videos_suport WHERE bmi = :bmi";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(':bmi', $bmi);
        $stmt->execute();
        $videos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $videos;
    }


}