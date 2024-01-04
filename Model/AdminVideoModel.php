<?php
require_once("../Controller/AdminVideoController.php");
require("../Database/database.php");
function db()
{
    $host     = 'localhost';
    $database = 'data_php';
    $user     = 'root';
    $password = '';

    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function showAllVideo()
{
    $db = db();
    $video = $db->prepare("SELECT * FROM podcasts");
    $video->execute();
    $result = $video->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function showOneVideo($id)
{
    $db = db();
    $video = $db->prepare("SELECT * FROM podcasts WHERE id = :id");
    $video->bindValue(':id', $id, PDO::PARAM_INT);
    $video->execute();
    $result = $video->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function createVideo($title, $description, $author_id, $youtube_link, $created_at, $image_url, $type, $view)
{
    try {
        $db = db();
        $video = $db->prepare("INSERT INTO podcasts (title,description,author_id,youtube_link,created_at,image_url,type,view) VALUES (:title, :description, :author_id, :youtube_link, :created_at, :image_url, :type, :view)");
        $video->bindParam(":title", $title);
        $video->bindParam(":description", $description);
        $video->bindParam(":author_id", $author_id);
        $video->bindParam(":youtube_link", $youtube_link);
        $video->bindParam(":created_at", $created_at);
        $video->bindParam(":image_url", $image_url);
        $video->bindParam(":type", $type);
        $video->bindParam(":view", $view);
        $video->execute();
        if ($video) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo "Insert failed: " . $e->getMessage();
        return false;
    }
}
function updateVideo($id,$title, $description, $author_id, $youtube_link, $created_at, $image_url, $type, $view)
{
    try {
        $db = db();
        $video = $db->prepare("UPDATE podcasts SET title= :title,description= :description,author_id= :author_id,youtube_link= :youtube_link,created_at= :created_at,image_url= :image_url,type= :type,view= :view WHERE id= :id");
        $video->bindParam(":title", $title);
        $video->bindParam(":description", $description);
        $video->bindParam(":author_id", $author_id);
        $video->bindParam(":youtube_link", $youtube_link);
        $video->bindParam(":created_at", $created_at);
        $video->bindParam(":image_url", $image_url);
        $video->bindParam(":type", $type);
        $video->bindParam(":view", $view);
        $video->bindParam(':id', $id, PDO::PARAM_INT);
        $video->execute();
        if ($video) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo "Insert failed: " . $e->getMessage();
        return false;
    }
}
function deleteVideo($id) {
    $db = db();
    $sql = "DELETE FROM podcasts WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            echo "Không tìm thấy học viên để xóa";
            return false;
        }
    } else {
        echo "Error updating record " . $stmt->errorCode();
    }
}