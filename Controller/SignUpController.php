<?php
include_once("../Model/AccountModel.php");
class SignUpController
{
    public function signUp()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $account = new Account();
            $password_again = $this->sanitizeInput($_POST['password_again']);
            $name = $this->sanitizeInput($_POST['username']);
            $email = $this->sanitizeInput($_POST['email']);
            $password =  $this->sanitizeInput($_POST['password']);
            $role_id = $this->sanitizeInput($_POST['input_role']);
            $isValid = $this->validateForm($name, $email, $password,$role_id);
            if ($isValid) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if ($password == $password_again) {
                        if($role_id == 3){
                            $account->add_expert($role_id,$name,null,null,$email,null,null,null,$account->getImg(),5,null,'Chuyên gia tâm lý','Hoạt động');
                        }
                        $result = $account->signUpAccount($name, $password, $email,$role_id);
                        if ($result) {
                            $new_user_name = base64_encode($name);
                            setcookie("User", $new_user_name, time() + (86400 * 30), "/"); // 86400 = 1 day
                            echo '<script>alert("Đăng Ký thành công!");</script>';
                            echo '<script>window.location.href = "home";</script>';
                            exit;
                        } else {
                            echo '<script>alert("Đăng Ký lỗi!");</script>';
                            echo '<script>window.location.href = "home";</script>';
                            exit;
                        }
                    } else {
                        echo '<script>alert("Mật khẩu không khớp!");</script>';
                        echo '<script>window.location.href = "home";</script>';
                        exit;
                    }
                } else {
                    echo '<script>alert("Email không hợp lệ!");</script>';
                    echo '<script>window.location.href = "home";</script>';
                    exit;
                }
            } else {
                echo '<script>alert("Dữ liệu không hợp lệ!");</script>';
                echo '<script>window.location.href = "home";</script>';
                exit;
            }
        }

        include("../../BitStorm/View/Account/SignUpView.php");
    }
    private function validateForm($username, $email, $password,$role_id)
    {
        $usernamePattern = '/^[a-zA-Z0-9\s]+$/';
        $passwordPattern = '/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$/';
        $emailPattern = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
        if (isset($username) && isset($password) && isset($email)) {

            if (!preg_match($usernamePattern, $username)) {
                return false;
            }
            if (!preg_match($emailPattern, $email)) {
                return false;
            }
            if (!preg_match($passwordPattern, $password)) {
                return false;
            }

            return true;
        }
        return false;
    }
    private function sanitizeInput($input)
    {
        $sanitizedInput = trim($input);
        $sanitizedInput = htmlspecialchars($sanitizedInput, ENT_QUOTES | ENT_HTML5);
        return $sanitizedInput;
    }
}

$signUpController = new SignUpController();
$signUpController->signUp();
