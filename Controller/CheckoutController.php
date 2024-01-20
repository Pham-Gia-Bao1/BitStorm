<?php
include_once("../Model/ExpertDetailModel.php");
include_once("../Model/AccountModel.php");
include_once("../Model/CheckoutModel.php");
include("../Model/PostModel.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../root/mail/PHPMailer-master/PHPMailer-master/src/Exception.php';
require '../root/mail/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require '../root/mail/PHPMailer-master/PHPMailer-master/src/SMTP.php';
$DetailExpertModel = new ExpertDetail();
$id = $_GET['expert_id'];
$dataExpert = $DetailExpertModel->getExpertDetail($id);
$calendarID = $dataExpert['calendar_id'];
$cookie_name = "User";
$note = htmlspecialchars($_POST['note']);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentDateTime = date('H:i:s d/m/Y');
if (isset($_COOKIE[$cookie_name])) {

    $account = new Account();
    $nameAndImg = $account->get_name_and_img_user();
    $nameAndImg[0];
    $Post = new Post();
    $userID = $Post->get_id($nameAndImg[0]);
    $user = $Post->getOneUser($userID);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userBooking = new Checkout();
        echo "<script> alert ('Đặt lịch thành công'); window.location.href = 'userProfile'; </script>";
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0; // Set this to 2 for debugging
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'bao.pham25@student.passerellesnumeriques.org';
            $mail->Password = 'dyfeyrhogigogkaj';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('bao.pham25@student.passerellesnumeriques.org', 'Pham gia bao');
            $mail->addAddress($user['email']);
            $mail->addAddress($dataExpert['email']);
            $mail->isHTML(true);
            $mail->Subject = 'Test mail Google Meet Link';
            $randomMeetLink = generateRandomGoogleMeetLink();
            $mail->Body = 'Here is your Google Meet link: <a href="' . $randomMeetLink . '">' . $randomMeetLink . '</a>';
            $result = $mail->send();
            if($result){
                $userBooking = $userBooking->createBooking($userID, $id, $calendarID, $note,$randomMeetLink);
            }

        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        exit(); // Đảm bảo dừng việc thực thi script sau lệnh header
    }
}
function generateRandomGoogleMeetLink()
{
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $googleMeetLink = 'https://meet.google.com/';
    for ($i = 0; $i < 3; $i++) {
        if ($i == 1) {
            for ($j = 0; $j < 4; $j++) {
                $googleMeetLink .= $characters[rand(0, strlen($characters) - 1)];
            }
        } else {
            for ($j = 0; $j < 3; $j++) {
                $googleMeetLink .= $characters[rand(0, strlen($characters) - 1)];
            }
        }
        if ($i < 2) {
            $googleMeetLink .= '-';
        }
    }
    return $googleMeetLink;
}
include("../View/Checkout/CheckoutView.php");
