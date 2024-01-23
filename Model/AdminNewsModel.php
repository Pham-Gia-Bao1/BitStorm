
<?php
include_once("../Model/ConnectDataBase.php");
require("../Controller/Database/database.php");
class AdminNews extends Connection
{
    function selectNews()
    {
        $db = $this->connect_database();
        $stmt = $db->prepare("SELECT * FROM news");
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }

    function selectOneNews($id)
    {
        $db = $this->connect_database();
        $stmt = $db->prepare("SELECT * FROM news WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $news = $stmt->fetch(PDO::FETCH_ASSOC);
        return $news;
    }
    function createNews($title, $content, $descriptions, $image_url, $created_at, $author_id, $link)
    {
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
            $result = $stmt->execute();
            if ($result) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    function updateNews($id, $title, $content, $descriptions, $image_url, $created_at, $author_id, $link)
    {
        try {
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
            $result = $stmt->execute();
            if ($result) {
                return true;
            } else {
                return false;
            }

            // exit;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    function deleteNews($id)
    {
        $db = $this->connect_database();
        $sql = "DELETE FROM news WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "<script>alert('Thành Công')</script>";
                return true;
            } else {
                echo "Không tìm thấy học viên để xóa";
                return false;
            }
        } else {
            echo "Error updating record " . $stmt->errorCode();
        }
    }
    public function find_new($searchTerm)
    {
        if (isset($searchTerm)) {
            $db = $this->connect_database();
            $searchTerm = '%' . $searchTerm . '%';

            $sql_query = "SELECT * FROM `news`";
            $sql_query .= " WHERE title LIKE :searchTerm";

            $sth = $db->prepare($sql_query);
            $sth->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
            $sth->execute();

            $results = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        else{

            return false;
        }
    }
}
