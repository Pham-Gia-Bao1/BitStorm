<?php
include_once("../Model/HomeModel.php");
include_once("../Model/AccountModel.php");
include_once("../Model/AdminNewsModel.php");
include_once("../Model/UserProfileModel.php");
class HomeController
{
        public function index()
        {   
            $cookie_name = "User";
            $userprofile = new UserProfile();
            $role_id = $userprofile->get_role_id();
            if ($role_id == 1) {
                $this->role_admin();
                return; // Exit the function after redirecting
        }
        $account = new Account();
        $nameAndImg = $account->get_name_and_img_user();
        $name = $nameAndImg[0] ?? '';
        $img = $nameAndImg[1] ?? '';
        include("../View/Home/HomeView.php");
    }
    public function role_admin()
    {
            header('Location: AdminHomePage');
            exit(); // Ensure the script stops execution after redirecting
    }
}
$controller = new HomeController();
$controller->index();