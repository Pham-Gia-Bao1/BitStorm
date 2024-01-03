<?php 

require("../Database/database.php");

function selectNews() {
    $db = db();
    $stmt = $db->prepare("SELECT * FROM news");
    $stmt->execute();
    $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $news;
}
function selectOneNews($id){
    $db = db();
    $stmt = $db->prepare("SELECT * FROM news WHERE id = :id");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $news;
}

function db() {
    $host     = 'localhost';
    $database = 'data_php';
    $user     = 'root';
    $password = '';

    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $descriptions = $_POST['descriptions'];
    $image_url = $_POST['image_url'];
    $created_at = $_POST['created_at'];
    $link = $_POST['link'];
    $author_id = $_POST['author_id'];
    if(isset($title)){
        $title = htmlspecialchars($_POST['title']);
         $title;
    }
    if(isset($content)){
        $content = htmlspecialchars($_POST['content']);
         $content;
    }
    if(isset( $descriptions)){
        $descriptions = htmlspecialchars($_POST['descriptions']);
          $descriptions;
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
    if(isset($link)){
        $link = htmlspecialchars($_POST['link']);
          $link;
    }

    createNews($title,$content,$descriptions,$image_url,$created_at,$author_id,$link);
}

function createNews($title,$content,$descriptions,$image_url,$created_at,$author_id,$link) {
    try {
        $db = db();
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
    } catch(PDOException $e) {
        echo "<script>alert('That Bai')</script>";
        echo "Connection failed: " . $e->getMessage();
    }
}
function updateNews($title,$content,$descriptions,$image_url,$created_at,$author_id,$link){
    try{
        $db = db();
        $stmt = $db->prepare("UPDATE news SET title = :title,content = :content,descriptions = :descriptions,image_url = :descriptions,created_at= :created_at,author_id = :author_id,link = :link WHERE id= :id");
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
function deleteNews($id) {
    $db = db();
    $sql = "DELETE FROM news WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            echo "Xóa Thành Công";
        } else {
            echo "Không tìm thấy id để xóa";
        }
    } else {
        echo "Error updating record " . $stmt->errorCode();
    }
}


?>