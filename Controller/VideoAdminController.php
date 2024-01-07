<?php 

include ("../root/CSS/Admin/AdminNews.css.php");
include("../Model/VideoAdminModel.php");
// ==============UPDATE========================
if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['id_update'])){
    $youtube_link = htmlspecialchars($_POST['youtube_link']);
    $title = htmlspecialchars($_POST['title']);
    $author_id = htmlspecialchars($_POST['author_id']);
    $description = htmlspecialchars($_POST['description']);
    $duration = htmlspecialchars($_POST['duration']);
    $created_at = htmlspecialchars($_POST['created_at']);
    $type = htmlspecialchars($_POST['type']);
    $view = htmlspecialchars($_POST['view']);
    $id = htmlspecialchars($_POST['id_update']);
    $results = updateVideos($id,$youtube_link,$title,$author_id,$description,$duration,$created_at,$type,$view);
}
// =============CREATE=====================
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $youtube_link = htmlspecialchars($_POST['youtube_link']);
    $title = htmlspecialchars($_POST['title']);
    $author_id = htmlspecialchars($_POST['author_id']);
    $description = htmlspecialchars($_POST['description']);
    $duration = htmlspecialchars($_POST['duration']);
    $type = htmlspecialchars($_POST['type']);
    $view = htmlspecialchars($_POST['view']);
    $results = createVideos($youtube_link,$title,$author_id,$description,$duration,$type,$view);
}
if (isset($_GET['id'])) {
    $id_delete = $_GET['id'];
    $result =deleteVideos($id_delete);
}
include ("../View/Admin/NewsVideo/VideoAdminView.php");