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


            $isValid = $this->validateForm($name, $email, $password);

            if ($isValid) {
                // Check if user already exists
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if ($password == $password_again) {
                        $result = $account->signUpAccount($name, $password, $email);
                        if ($result) {
                            echo '<script>alert("Đăng Ký thành công!");</script>';
                            header("Location: home");
                            exit;
                        } else {
                            echo '<script>alert("Đăng Ký lỗi!");</script>';
                            header("Location: home");
                            exit;
                        }
                    } else {
                        echo '<script>alert("Mật khẩu không khớp!");</script>';
                        header("Location: home");
                        exit;
                    }
                } else {
                    echo '<script>alert("Email không hợp lệ!");</script>';
                    header("Location: home");
                    exit;
                }
            } else {
                echo '<script>alert("Dữ liệu không hợp lệ!");</script>';
                header("Location: home");
                exit;
            }
        }

        include("../WEB_PHP/View/Account/SignUpView.php");
    }

    private function validateForm($username, $email, $password)
    {
        $usernamePattern = '/^[a-zA-Z0-9\s]+$/';
        $passwordPattern = '/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$/';
        $emailPattern = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';

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

    private function sanitizeInput($input)
    {
        $sanitizedInput = trim($input);
        $sanitizedInput = htmlspecialchars($sanitizedInput, ENT_QUOTES | ENT_HTML5);
        return $sanitizedInput;
    }
}

$signUpController = new SignUpController();
$signUpController->signUp();
?>