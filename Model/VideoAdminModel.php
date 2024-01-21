<?php
include_once ("../Controller/VideoAdminController.php");
require ("../Controller/Database/database.php");
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
function displayAllVideo()
{
    $db = db();
    $video = $db->prepare("SELECT * FROM videos");
    $video->execute();
    $videos = $video->fetchAll(PDO::FETCH_ASSOC);
    return $videos;
}
function displayOneVideo($id)
{
    $db = db();
    $video = $db->prepare("SELECT * FROM videos WHERE id = :id");
    $video->bindParam(":id", $id);
    $video->execute();  // You were missing this line
    $videos = $video->fetch(PDO::FETCH_ASSOC);
    return $videos;
}

function createVideos($youtube_link, $title, $author_id, $description, $duration, $type, $view)
{
    try {
        $db = db();
        $video = $db->prepare("INSERT INTO videos (youtube_link,title,author_id,description,duration,type,view) VALUES (:youtube_link, :title, :author_id, :description, :duration, :type, :view)");
        $video->bindParam(":youtube_link", $youtube_link);
        $video->bindParam(":title", $title);
        $video->bindParam(":author_id", $author_id);
        $video->bindParam(":description", $description);
        $video->bindParam(":duration", $duration);
        $video->bindParam(":type", $type);
        $video->bindParam(":view", $view);
        $results = $video->execute();

        if ($results) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo "Lỗi : " . $e->getMessage();
    }
}
function updateVideos($id,$youtube_link,$title,$author_id,$description,$duration,$type,$view){
    try{
        $db = db();
        $video = $db ->prepare("UPDATE videos SET youtube_link= :youtube_link, title= :title, author_id= :author_id,description= :description, duration= :duration, type =:type, view= :view WHERE id= :id");
        $video->bindParam(":youtube_link", $youtube_link);
        $video->bindParam(":title", $title);
        $video->bindParam(":author_id", $author_id);
        $video->bindParam(":description", $description);
        $video->bindParam(":duration", $duration);
        $video->bindParam(":type", $type);
        $video->bindParam(":view", $view);
        $video->bindParam(":id",$id);
        $results = $video->execute();
        if ($results) {
            return true;
        } else {
            return false;
        }
    }
    catch (PDOException $e ){
        echo "Error :".$e->getMessage();
    }
}
function deleteVideos($id) {
    $db = db();
    $sql = "DELETE FROM videos WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    } else {
        echo "Error updating record " . $stmt->errorCode();
    }
}
