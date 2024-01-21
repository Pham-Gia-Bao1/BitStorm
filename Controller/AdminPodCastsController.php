<?php
include "../root/CSS/Admin/AdminNews.css.php";
include "../Model/AdminPodCastsModel.php";
include_once("../Model/UserProfileModel.php");
include_once("../Model/AccountModel.php");
$userprofile = new UserProfile();
$role_id = $userprofile->get_role_id();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['id'])) {
        if (isset($_POST['title'])) {
            $title = htmlspecialchars($_POST['title']);
        }
        if (isset($_POST['description'])) {
            $description = htmlspecialchars($_POST['description']);
        }
        if (isset($_POST['youtube_link'])) {
            $youtube_link = htmlspecialchars($_POST['youtube_link']);
        }
        if (isset($_POST['author_id'])) {
            $author_id = htmlspecialchars($_POST['author_id']);
        }
        if (isset($_POST['image_url'])) {
            $image_url = htmlspecialchars($_POST['image_url']);
        }
        if (isset($_POST['type'])) {
            $type = htmlspecialchars($_POST['type']);
        }
        if (isset($_POST['view'])) {
            $view = htmlspecialchars($_POST['view']);
        }
        $id = htmlspecialchars($_POST['id']);
        $result = updateVideo($id, $title, $description, $author_id, $youtube_link, $image_url, $type, $view);
    } else {
        if (isset($_POST['title'])) {
            $title = htmlspecialchars($_POST['title']);
        }
        if (isset($_POST['description'])) {
            $description = htmlspecialchars($_POST['description']);
        }
        if (isset($_POST['youtube_link'])) {
            $youtube_link = htmlspecialchars($_POST['youtube_link']);
        }
        if (isset($_POST['author_id'])) {
            $author_id = htmlspecialchars($_POST['author_id']);
        }
        if (isset($_POST['image_url'])) {
            $image_url = htmlspecialchars($_POST['image_url']);
        }
        if (isset($_POST['type'])) {
            $type = htmlspecialchars($_POST['type']);
        }
        if (isset($_POST['view'])) {
            $view = htmlspecialchars($_POST['view']);
        }
        $result = createVideo($title, $description, $author_id, $youtube_link, $image_url, $type, $view);
    }
}
if (isset($_GET['id'])) {
    $id_delete = $_GET['id'];
    $result = deleteVideo($id_delete);
    if ($result) {
        header('Location: AdminPodCasts');
        exit();
    }
}
if($role_id == 1){
    include "../View/Admin/NewsVideo/AdminPodCastsView.php";
}else{
    header("Location: home");
}
