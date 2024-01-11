<?php
// include("../Model/AdminCommentsModel.php");
// include_once("../Model/UserProfileModel.php");
include("../Model/AdminHomePageModel.php");

$adminHome = new AdminHomPage();
$countUser= $adminHome->countUser();
$countExpert=$adminHome->countExpert();
$countBooking = $adminHome->countBooking();
$countPost=$adminHome->countPost();
$bookings=$adminHome->showRecentBooked();

include("../View/Admin/Homepage/HomeAdminView.php");
?>