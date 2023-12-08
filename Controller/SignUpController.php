<?php
include_once("../Model/Account.php");

class SignUpController
{

    public function signUp()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $account = new Account();
            $name = $this->sanitizeInput($_POST['username']);
            $email = $this->sanitizeInput( $_POST['email']);
            $password =  $this->sanitizeInput($_POST['password']);
            // Check if user already exists
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $result = $account->signUpAccount($name, $password, $email);
            }

            if ($result) {
                echo '<script>alert("Đăng Ký thành công!");</script>';

                header("Location: home");
                exit;
            }
        }
        include("../WEB_PHP/View/Account/SignUp.php");
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
