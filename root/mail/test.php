<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Email</title>
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet"/>
</head>
<body>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/Users/ACER/Downloads/test/mail/PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'C:/Users/ACER/Downloads/test/mail/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'C:/Users/ACER/Downloads/test/mail/PHPMailer-master/PHPMailer-master/src/SMTP.php';

// Function to generate a valid Google Meet link
function generateRandomGoogleMeetLink() {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $googleMeetLink = 'https://meet.google.com/';

    // Generating the required format xxx-yyy-zzz
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Set this to 2 for debugging
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bao.pham25@student.passerellesnumeriques.org';
        $mail->Password = 'dyfeyrhogigogkaj';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('bao.pham25@student.passerellesnumeriques.org', 'Pham gia bao');
        $mail->addAddress('phamgiabao123abc@gmail.com', 'baocute');
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Test mail Google Meet Link';

        // Generate a valid Google Meet link
        $randomMeetLink = generateRandomGoogleMeetLink();

        // Embed the random Meet link into the email body
        $mail->Body = 'Here is your Google Meet link: <a href="' . $randomMeetLink . '">' . $randomMeetLink . '</a>';

        $result = $mail->send();
        if ($result) {
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<script>Swal.fire('Thành công!', 'Hành động của bạn đã được thực hiện thành công.', 'success');</script>";
        } else {
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<script>Swal.fire('Lỗi!', 'Có lỗi xảy ra khi gửi email.', 'error');</script>";
        }
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>

<form method="post">
    <button type="submit">Gửi Email</button>
</form>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
