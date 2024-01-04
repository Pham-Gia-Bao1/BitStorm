<?php
include_once("../Model/ExpertDetailModel.php");
include_once("../Model/AccountModel.php");
$currentDate = date('Y-m-d'); // Lấy ngày hiện tại
$DetailExpertModel = new ExpertDetail();
$id = $_GET['id'];
$data = $DetailExpertModel->getExpertDetail($id);
$Experts = $DetailExpertModel->getRecommendExperts($currentDate);
shuffle($Experts);
$suggestExperts = $Experts;
include("../View/ContactExpert/ContactExpertDetailView.php");
?>