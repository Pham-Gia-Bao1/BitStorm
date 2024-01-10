<?php
include_once("../Model/ExpertDetailModel.php");
include_once("../Model/AccountModel.php");
include_once("../Model/CheckoutModel.php");
include("../Model/PostModel.php");
$DetailExpertModel = new ExpertDetail();
$id = $_GET['expert_id'];
$dataExpert = $DetailExpertModel->getExpertDetail($id);
$calendarID = $dataExpert['calendar_id'];
$cookie_name = "User";
$note = htmlspecialchars($_POST['note']) ;
date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentDateTime = date('H:i:s d/m/Y');
if (isset($_COOKIE[$cookie_name])){
    $account = new Account();
    $nameAndImg=$account->get_name_and_img_user();
    $nameAndImg[0]; 
    $Post = new Post();
    $userID = $Post->get_id($nameAndImg[0]);
    $user = $Post->getOneUser($userID);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userBooking = new Checkout();
        $userBooking = $userBooking->createBooking($userID, $id, $calendarID, $note);
        echo "<script> 
              alert ('Đặt lịch thành công'); 
              window.location.href = 'home';
          </script>";
        exit(); // Đảm bảo dừng việc thực thi script sau lệnh header
    } 
    
}
  
?>
<?php include("../View/Checkout/CheckoutView.php"); ?>
