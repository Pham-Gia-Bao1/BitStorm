
<?php 
include_once("../Model/ConnectDataBase.php");
require("../Database/database.php");

class AdminNews extends Connection {
    
    function selectNews() {
        $db = $this->connect_database();
        $stmt = $db->prepare("SELECT * FROM news");
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }

    function selectOneNews($id){
        $db = $this->connect_database();
        $stmt = $db->prepare("SELECT * FROM news WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }
    function createNews($title, $content, $descriptions, $image_url, $created_at, $author_id, $link) {
        try {
            $db = $this->connect_database();
            $stmt = $db->prepare("INSERT INTO news (title, content, descriptions, image_url, created_at, author_id, link) VALUES (:title, :content, :descriptions, :image_url, :created_at, :author_id, :link)");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':descriptions', $descriptions);
            $stmt->bindParam(':image_url', $image_url);
            $stmt->bindParam(':created_at', $created_at);
            $stmt->bindParam(':author_id', $author_id);
            $stmt->bindParam(':link', $link);
            $stmt->execute();
            echo "<script>alert('Thanh Cong')</script>";
            // exit;
        } catch (PDOException $e) {
            echo "<script>alert('That Bai')</script>";
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
    

    function updateNews($title, $content, $descriptions, $image_url, $created_at, $author_id, $link){
        try{
            $db = $this->connect_database();
            $stmt = $db->prepare("UPDATE news SET title = :title, content = :content, descriptions = :descriptions, image_url = :image_url, created_at = :created_at, author_id = :author_id, link = :link WHERE id = :id");
            // $stmt = $db->prepare("UPDATE news SET title = :title,content = :content,descriptions = :descriptions,image_url = :image_url,created_at= :created_at,author_id = :author_id,link = :link WHERE id= :id");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':descriptions', $descriptions);
            $stmt->bindParam(':image_url', $image_url);
            $stmt->bindParam(':created_at', $created_at);
            $stmt->bindParam(':author_id', $author_id);
            $stmt->bindParam(':link', $link);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            echo "<script>alert('Thanh Cong')</script>";
            // exit;
        } catch(PDOException $e) {
            echo "<script>alert('That Bai')</script>";
            echo "Connection failed: " . $e->getMessage();
            }
        }
        function deleteNews($id) {
            try {
                $db = $this->connect_database();
                $sql = "DELETE FROM news WHERE id = :id";
                $stmt = $db->prepare($sql);
                // $stmt->bindParam(':id', $id);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                echo "<script>alert('Thanh Cong')</script>";
            }
            catch(PDOException $e) {
                echo "<script>alert('That Bai')</script>";
                echo "Connection failed: " . $e->getMessage();
                }
            }
  

        }



