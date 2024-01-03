<?php 
include "../Database/database.php";

include_once "../root/CSS/Admin/AdminNews.css.php";
include_once "../Model/AdminNewsModel.php";
$newAdmin = new AdminNews();
$news = $newAdmin->selectNews();
// $newsID =$newAdmin->selectOneNews($id);
include_once "../View/Admin/NewsVideo/AdminNewsView.php";
?>