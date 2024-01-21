<?php
include_once("../Model/ExpertDetailModel.php");
include_once("../Model/AccountModel.php");
include_once("../Model/CheckoutModel.php");
include_once("../Model/UserProfileModel.php");
include("../Model/PostModel.php");
setcookie("susscess", 1, time() + (86400), "/"); // 86400 = 1 day
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
    $calendar = new UserProfile();
    $old_bookings = $calendar->get_bookings_experts($id);
    $nameAndImg[0];
    $Post = new Post();
    $userID = $Post->get_id($nameAndImg[0]);
    $user = $Post->getOneUser($userID);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userBooking = new Checkout();
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0; // Set this to 2 for debugging
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'bitstormm@gmail.com';
            $mail->Password = 'baki eija eaay eepi';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('bitstormm@gmail.com', 'BitStorm');
            $mail->addAddress($user['email']);
            $mail->addAddress($dataExpert['email']);
            $mail->addAddress('phamgiabao123abc@gmail.com');
            $mail->isHTML(true);
            $mail->Subject = 'Test mail Google Meet Link';
            $randomMeetLink = generateRandomGoogleMeetLink();
            $greetingImageURL = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM56D-YDC_Sgkn8XZW77CCkpqAnBraEglifY15KYZUc4BGMIfak6Ho0ROkQDUoIEexaPU&usqp=CAU';
            $introductionText = "Xin chào !cảm ơn bạn đã tham gia dịch vụ tại BiStorm của chúng tôi.
             Bạn đã được lịch của chuyên gia ".$dataExpert['full_name'];
            $mail->Body = '
             <body>
                <img src="' . $greetingImageURL . '" alt="Greeting Image" style="max-width: 100%; height: auto;">
                <p>' . $introductionText . '</p>
                <p> Đây là link phòng gặp mặt chuyên gia <a href="' . $randomMeetLink . '">' . $randomMeetLink . '</a></p>
                <p> Đây là mã dự phòng nếu link bij lỗi thì bạn lên GG meet nhập mã phòng để tham gia nhé! '.$randomMeetLink.'</p>
            </body>';
            $mail->isHTML(true);
            $result = $mail->send();
            if ($result) {
                echo "<script> alert ('Đặt lịch thành công'); window.location.href = 'userProfile'; </script>";
                $userBooking = $userBooking->createBooking($userID, $id, $calendarID, $note, $randomMeetLink);
            }
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        exit();
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
