<?php
include_once("../Model/UserProfileModel.php");
$userprofile = new UserProfile();
$role_id = $userprofile->get_role_id();

include_once("../Model/AdminExpertModel.php");
$Expert = new Expert();
$experts = $Expert->get_all_experts();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['actionExpert'])) {
        $action = $_POST['actionExpert'];
        switch ($action) {
            case 'createExpert':
                $name = htmlspecialchars($_POST['name']);
                $gender = htmlspecialchars($_POST['gender']);
                $address = htmlspecialchars($_POST['address']);
                $email = htmlspecialchars($_POST['email']);
                $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
                $age = htmlspecialchars($_POST['age']);
                $experience = htmlspecialchars($_POST['experience']);
                $expertImg = htmlspecialchars($_POST['avatar']);
                $rating = htmlspecialchars($_POST['rating']);
                $certificate = htmlspecialchars($_POST['certificate']);
                $specialization = htmlspecialchars($_POST['specialization']);
                $newExperts = $Expert->createExpert($name, $gender, $address, $email, $phoneNumber, $age, $experience, $expertImg, $rating, $certificate, $specialization);
                Header("Location: AdminExpert");

                break;
            case 'updateExpert':
                $name = htmlspecialchars($_POST['name']);
                $gender = htmlspecialchars($_POST['gender']);
                $address = htmlspecialchars($_POST['address']);
                $email = htmlspecialchars($_POST['email']);
                $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
                $age = htmlspecialchars($_POST['age']);
                $experience = htmlspecialchars($_POST['experience']);
                $expertImg = htmlspecialchars($_POST['avatar']);
                $rating = htmlspecialchars($_POST['rating']);
                $certificate = htmlspecialchars($_POST['certificate']);
                $specialization = htmlspecialchars($_POST['specialization']);
                $status = htmlspecialchars($_POST['status']);
                $id = $_POST['expertId'];
                $newExperts = $Expert->updateExpert($id, $name, $gender, $address, $email, $phoneNumber, $age, $experience, $expertImg, $rating, $certificate, $specialization, $status);
                Header("Location: AdminExpert");

                break;
            case 'delete':
                break;
            default:
                // Xử lý mặc định hoặc báo lỗi
                echo json_encode(['error' => 'Invalid action']);
                break;
        }
    }
}
if ($role_id == 1) {
    include("../View/Admin/AdminUser/AdminExpertView.php");
} else {

    header("Location: home");
}
