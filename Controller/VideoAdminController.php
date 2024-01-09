<?php

include("../root/CSS/Admin/AdminNews.css.php");
include("../Model/VideoAdminModel.php");
// // ==============UPDATE========================
// if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['id_update'])){
//     $youtube_link = htmlspecialchars($_POST['youtube_link']);
//     $title = htmlspecialchars($_POST['title']);
//     $author_id = htmlspecialchars($_POST['author_id']);
//     $description = htmlspecialchars($_POST['description']);
//     $duration = htmlspecialchars($_POST['duration']);
//     $created_at = htmlspecialchars($_POST['created_at']);
//     $type = htmlspecialchars($_POST['type']);
//     $view = htmlspecialchars($_POST['view']);
//     $id = htmlspecialchars($_POST['id_update']);
//     $results = updateVideos($id,$youtube_link,$title,$author_id,$description,$duration,$created_at,$type,$view);
// }
// // =============CREATE=====================
// if($_SERVER['REQUEST_METHOD'] == "POST"){
//     $youtube_link = htmlspecialchars($_POST['youtube_link']);
//     $title = htmlspecialchars($_POST['title']);
//     $author_id = htmlspecialchars($_POST['author_id']);
//     $description = htmlspecialchars($_POST['description']);
//     $duration = htmlspecialchars($_POST['duration']);
//     $type = htmlspecialchars($_POST['type']);
//     $view = htmlspecialchars($_POST['view']);
//     $results = createVideos($youtube_link,$title,$author_id,$description,$duration,$type,$view);
// }


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        if(isset($_POST['youtube_link'])){
            $youtube_link = htmlspecialchars($_POST['youtube_link']);
        }
        if(isset($_POST['title'])){
            $title = htmlspecialchars($_POST['title']);
        }
       if(isset($_POST['author_id'])){
        $author_id = htmlspecialchars($_POST['author_id']);
       }
       if(isset($_POST['description'])){
        $description = htmlspecialchars($_POST['description']);
       }
       if(isset($_POST['duration'])){
        $duration = htmlspecialchars($_POST['duration']);
       }
       if(isset($_POST['type'])){
        $type = htmlspecialchars($_POST['type']);
       }
       if(isset($_POST['view'])){
        $view = htmlspecialchars($_POST['view']);
       }
        $results = updateVideos($id, $youtube_link, $title, $author_id, $description, $duration, $type, $view);
    } else {
        if(isset($_POST['youtube_link'])){
            $youtube_link = htmlspecialchars($_POST['youtube_link']);
        }
        if(isset($_POST['title'])){
            $title = htmlspecialchars($_POST['title']);
        }
       if(isset($_POST['author_id'])){
        $author_id = htmlspecialchars($_POST['author_id']);
       }
       if(isset($_POST['description'])){
        $description = htmlspecialchars($_POST['description']);
       }
       if(isset($_POST['duration'])){
        $duration = htmlspecialchars($_POST['duration']);
       }
       if(isset($_POST['type'])){
        $type = htmlspecialchars($_POST['type']);
       }
       if(isset($_POST['view'])){
        $view = htmlspecialchars($_POST['view']);
       }
        $results = createVideos($youtube_link, $title, $author_id, $description, $duration, $type, $view);
    }
}
if (isset($_GET['id'])) {
    $id_delete = $_GET['id'];
    $result = deleteVideos($id_delete);
}
include("../View/Admin/NewsVideo/VideoAdminView.php");
