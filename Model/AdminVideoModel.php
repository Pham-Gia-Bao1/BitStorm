<?php 

require("../Database/database.php");
class AdminVideo extends Connection {
    function selectVideo() {
        $db = $this->connect_database();
        $stmt = $db->prepare("SELECT * FROM podcasts");
        $stmt->execute();
        $video = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $video;
    }
    
    function selectOneVideo($id) {
        $db = $this->connect_database();
        $stmt = $db->prepare("SELECT * FROM podcasts WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $video = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $video;
    }
    function createVideo($title,$description,$author_id,$youtube_link,$created_at,$image_url,$type,$view) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $title = $_POST['title'];
            $youtube_link = $_POST['youtube_link'];
            $description = $_POST['description'];
            $image_url = $_POST['image_url'];
            $created_at = $_POST['created_at'];
            $type = $_POST['type'];
            $author_id = $_POST['author_id'];
            $view = $_POST['view'];
            if(isset($title)){
                $title = htmlspecialchars($_POST['title']);
                $title;
            }
            if(isset($youtube_link)){
                $youtube_link = htmlspecialchars($_POST['youtube_link']);
                $youtube_link;
            }
            if(isset( $description)){
                $description = htmlspecialchars($_POST['description']);
                $description;
            }
            if(isset($image_url)){
                $image_url = htmlspecialchars($_POST['image_url']);
                $image_url;
            }

            if(isset($created_at)){
                $created_at = htmlspecialchars($_POST['created_at']);
                $created_at;
            }
            if(isset($author_id)){
                $author_id = htmlspecialchars($_POST['author_id']);
                $author_id;
            }
            if(isset($type)){
                $type = htmlspecialchars($_POST['type']);
                $type;
            }
            if(isset($view)){
                $view = htmlspecialchars($_POST['view']);
                $view;
            }}
            try {
                $db = $this->connect_database();
                $stmt = $db->prepare("INSERT INTO podcasts (title, description,author_id,youtube_link, created_at, image_url, type,view) VALUES (:title, :description, :author_id, :youtube_link, :image_url, :created_at, :type,:view)");
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':description', $description);
                echo $description;
                $stmt->bindParam(':youtube_link', $youtube_link);
                $stmt->bindParam(':image_url', $image_url);
                $stmt->bindParam(':created_at', $created_at);
                $stmt->bindParam(':author_id', $author_id);
                $stmt->bindParam(':type', $type);
                $stmt->bindParam(':view', $view);
                $stmt->execute();
                echo "<script>alert('Thanh Cong')</script>";
            } catch(PDOException $e) {
                echo "<script>alert('That Bai')</script>";
                echo "Connection failed huy: " . $e->getMessage();
            }
        }}
    function updateVideo($title,$description,$author_id,$youtube_link,$created_at,$image_url,$type,$view){
        try{
            $db = $this->connect_database();
            $stmt = $db->prepare("UPDATE podcasts SET title = :title,description = :description,descriptions = :descriptions,image_url = :descriptions,created_at= :created_at,author_id = :author_id,link = :link WHERE id= :id");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':descriptions', $descriptions);
            $stmt->bindParam(':image_url', $image_url);
            $stmt->bindParam(':created_at', $created_at);
            $stmt->bindParam(':author_id', $author_id);
            $stmt->bindParam(':link', $link);
            $stmt->execute();
            echo "<script>alert('Thanh Cong')</script>";
        } catch(PDOException $e) {
            echo "<script>alert('That Bai')</script>";
            echo "Connection failed: " . $e->getMessage();
            }
        }
    }
