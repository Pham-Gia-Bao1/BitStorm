<?php
include "../Database/database.php";
include_once "../root/CSS/Admin/AdminNews.css.php";
include_once("../Model/BlogModel.php");
// include("../Model/AdminCommentsModel.php");
include_once("../Model/UserProfileModel.php");
include_once "../Model/AdminNewsModel.php";
$newAdmin = new AdminNews();
$news = $newAdmin->selectNews();

if (isset($_POST['created_at']) && isset($_POST['descriptions']) && isset($_POST['content']) && isset($_POST['created_at']) && isset($_POST['link']) && isset($_POST['author_id']) && isset($_POST['image_url'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $descriptions = $_POST['descriptions'];
    $created_at = $_POST['created_at'];
    $link = $_POST['link'];
    $author_id = $_POST['author_id'];
    $image_url = $_POST['image_url'];
    $result = $newAdmin->createNews($title, $content, $descriptions, $image_url, $created_at, $author_id, $link);
    if ($result) {
        header('Location: AdminNews');
    }
}
// update 
if (isset($_POST['title'], $_POST['content'], $_POST['descriptions'], $_POST['image_url'], $_POST['created_at'], $_POST['author_id'], $_POST['link'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $descriptions = $_POST['descriptions'];
    $image_url = $_POST['image_url'];
    $created_at = $_POST['created_at'];
    $link = $_POST['link'];
    $author_id = $_POST['author_id'];

    $result = $newAdmin->updateNews($title, $content, $descriptions, $image_url, $created_at, $author_id, $link);
    if ($result) {
        header('Location: AdminNews');
        // exit;
    }
}
// delete
if (isset($_GET['id_delete'])) {
    $id = $_GET['id_delete'];
    $newAdmin->deleteNews($id);
    header('Location: AdminNews');
}
include_once "../View/Admin/NewsVideo/AdminNewsView.php";