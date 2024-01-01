<?php
include_once("../Model/ContactExpertModel.php");
include_once("../Model/AccountModel.php");
$currentDate = date('Y-m-d'); // Lấy ngày hiện tại
$ExpertModel = new Expert();
$data = $ExpertModel-> getExpertsWithCalendar($currentDate);
$isFinding = False;
$resultOfSearchExperts = [];
if (isset($_GET['fdoctor']) && !empty($_GET['fdoctor'])) {
    //Mã hóa URL trước khi data được gửi đi
    $isFinding = True;
    $searchKeyword = urldecode($_GET['fdoctor']);
    $resultOfSearchExperts = $ExpertModel->searchExperts($searchKeyword, $currentDate);
}

include("../View/ContactExpert/ContactExpertView.php");
?>


