<?php
// include("../Model/AdminCommentsModel.php");
// include_once("../Model/UserProfileModel.php");
include("../Model/AdminHomePageModel.php");
include_once("../Model/UserProfileModel.php");
$userprofile = new UserProfile();
$role_id = $userprofile->get_role_id();

$adminHome = new AdminHomPage();
$countUser= $adminHome->countUser();
$countExpert=$adminHome->countExpert();
$countBooking = $adminHome->countBooking();
$countPost=$adminHome->countPost();
$bookings=$adminHome->showRecentBooked();
if($role_id == 1){
    include("../View/Admin/Homepage/HomeAdminView.php");
}else{

    header("Location: home");
}

?>