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
$cookie_name = "User";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (!isset($_COOKIE[$cookie_name])) {
      "<script> alert('Vui lòng đăng nhập trước khi đặt lịch hẹn');";
        header("Location: AdminUser");
    }
}
