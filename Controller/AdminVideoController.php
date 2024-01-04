<?php 
include "../root/CSS/Admin/AdminVideo.css.php";
include "../Model/AdminVideoModel.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $created_at = htmlspecialchars($_POST['created_at']);
    $youtube_link = htmlspecialchars($_POST['youtube_link']);
    $author_id = htmlspecialchars($_POST['author_id']);
    $image_url = htmlspecialchars($_POST['image_url']);
    $type = htmlspecialchars($_POST['type']);
    $view = htmlspecialchars($_POST['view']);
    $result = createVideo($title, $description, $author_id, $youtube_link, $created_at, $image_url, $type, $view);
    if ($result) {
        header('Location: AdminVideo');
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $created_at = htmlspecialchars($_POST['created_at']);
    $youtube_link = htmlspecialchars($_POST['youtube_link']);
    $author_id = htmlspecialchars($_POST['author_id']);
    $image_url = htmlspecialchars($_POST['image_url']);
    $type = htmlspecialchars($_POST['type']);
    $view = htmlspecialchars($_POST['view']);
    $id = htmlspecialchars($_POST['id']);
    $result = updateVideo($id,$title, $description, $author_id, $youtube_link, $created_at, $image_url, $type, $view);
    if ($result) {
        header('Location: AdminVideo');
    }
}
if (isset($_GET['id'])) {
    $id_delete = $_GET['id'];
    $result =deleteVideo($id_delete);
    if ($result) {
        header('Location: AdminVideo');
        exit();
    }
}
include "../View/Admin/NewsVideo/AdminVideoView.php";