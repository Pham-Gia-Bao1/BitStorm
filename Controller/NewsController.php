<?php
require "../Database/database.php";
// include("../Model/NewsModel.php");
include_once("../Model/AccountModel.php");
include_once("../Model/AdminNewsModel.php");
$newAdmin = new AdminNews();
$news=$newAdmin->selectNews();
require "../View/News/NewsView.php";
?>