<?php
include_once("../Model/HomeModel.php");
include_once("../Model/AccountModel.php");
include_once ("../Model/AdminNewsModel.php");
class HomeController
{
    public function index()
    {
        $cookie_name = "User";
        // Hiển thị view
        if (isset($_COOKIE[$cookie_name])) {
            $account = new Account();
            $nameAndImg = $account->get_name_and_img_user();
            $name = $nameAndImg[0] ?? '';
            $img = $nameAndImg[1] ?? '';
            include("../View/Home/HomeView.php");
        } else {
            include("../View/Home/HomeView.php");
        }
    }
}
$controller = new HomeController();
$controller->index();

