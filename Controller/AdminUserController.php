<?php
include_once("../Model/AdminUserModel.php");
$User = new User();
$clients = $User->get_all_users();

function validate_username($username)
{
    // function to check if username must be alphanumeric 
    if (ctype_alnum($username)) {
        return true;
    }
    return false;
}

function validate_email($email)
{
    // function to check if email is correct (must contain '@')
    if (strpos($email, '@') == false) {
        return false;
    }
    return true;
}

function validatePassword($password)
{
    if (strlen($password) < 8 || strlen($password) > 20) {
        return false;
    }

    // Complexity requirements (at least one uppercase, one lowercase, one digit, and one special character)
    if (!preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password) || !preg_match("/[0-9]/", $password) || !preg_match("/[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/", $password)) {
        return false;
    }
    return true;
}

function validatePhoneNumber($phoneNumber)
{
    // Remove any non-numeric characters
    $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

    // Check if the phone number starts with "0" or "84" and is followed by 9 digits
    if (preg_match('/^(0|84)\d{9}$/', $phoneNumber)) {
        return true;
    } else {
        return false;
    }
}

$user_error = "";
$email_error = "";
$phoneNumber_error = "";
$password_error = "";

$form_valid = false;

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
                    if (validate_username($name) == false) {
                        $user_error = "Tên đăng nhập không hợp lệ";
                    }
                    
                    if (validate_email($email) == false) {
                        $email_error = "Địa chỉ email không hợp lệ";
                    }

                    if (validatePhoneNumber($phoneNumber) == false){
                        $phoneNumber_error = "Số điện thoại không hợp lệ";
                    }

                    if (validatePassword($password) == false){
                        $password_error = "Password phải chứa chữ hoa, chữ thường, kí tự đặc biệt";
                    }

                    if ($user_error == '' && $email_error == '' && $phoneNumber_error == '' && $password_error == '') {
                        $form_valid = true;
                        $newClients = $User->createUser($name, $email, $password, $phoneNumber, $userImg);
                        Header("Location: AdminUser");
                    }
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
?>
<?php include("../View/Admin/AdminUser/AdminUserView.php"); ?>
