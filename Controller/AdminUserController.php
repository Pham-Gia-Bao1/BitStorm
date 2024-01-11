<?php
include_once("../Model/AdminUserModel.php");
$User = new User();
$clients = $User->get_all_users();
include_once("../Model/UserProfileModel.php");
$userprofile = new UserProfile();
$role_id = $userprofile->get_role_id();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'createUser':
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phoneNumber'])) {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $password = htmlspecialchars($_POST['password']);
                    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
                    $userImg = htmlspecialchars($_POST['imgUser']);
                    // $id = $_POST['userId'];
                    $newClients = $User->createUser($name, $email, $password, $phoneNumber, $userImg);
                    Header("Location: AdminUser");
                }
                break;
            case 'updateUser':

                if (!empty($_POST['userId']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phoneNumber'])) {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $password = htmlspecialchars($_POST['password']);
                    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
                    $userImg = htmlspecialchars($_POST['imgUser']);
                    $status = htmlspecialchars($_POST['status']);
                    $id = $_POST['userId'];
                    $newClients = $User->updateUser($id, $name, $email, $password, $phoneNumber, $userImg, $status);
                    Header("Location: AdminUser");
                }
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
    include("../View/Admin/AdminUser/AdminUserView.php");
} else {
    header("Location: home");
}
