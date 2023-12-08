<?php
include_once("../Model/Home.php");
include_once("../Model/Account.php");


// Triển khai phương thức index trong controller
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
            include("../View/Home/Home.php");
        } else {
            include("../View/Home/Home.php");
        }
    }
}
// Tạo đối tượng controller
$controller = new HomeController();

// Gọi phương thức index
$controller->index();
