<?php
session_start();
include_once("../Model/AccountModel.php");
class SignUpController
{
    public $name_error = "";
    public $email_error = "";
    public $password_error = "";
    public $password_again_error = "";

    public $role_id_error = "";

    private function validateForm($name, $email, $password, $role_id)
    {
        $isValid = true; // Assume the form is initially valid

        // Validate name
        if (empty($name) || !preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
            $this->name_error = 'Invalid username format. Only letters, numbers, and spaces are allowed.';
            $isValid = false;
        }

        // Validate email
        if (empty($email) || !preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email)) {
            $this->email_error = 'Invalid email format.';
            $isValid = false;
        }

        // Validate password
        if (empty($password) || !preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$/', $password)) {
            $this->password_error = 'Password must have at least 8 characters, including an uppercase letter, a digit, and a special character.';
            $isValid = false;
        }

        // Validate password again
        $password_again = $this->sanitizeInput($_POST['password_again']);
        if (empty($password_again) || $password_again !== $password) {
            $this->password_again_error = 'Passwords do not match.';
            $isValid = false;
        }

        // Validate role_id (assuming $role_id should be either '2' or '3')
        if (!in_array($role_id, ['2', '3'])) {
            $this->role_id_error = 'Invalid role ID.';
            $isValid = false;
        }

        return $isValid;
    }
    public function signUp()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $account = new Account();
            $password_again = $this->sanitizeInput($_POST['password_again']);
            $name = $this->sanitizeInput($_POST['username']);
            $email = $this->sanitizeInput($_POST['email']);
            $password =  $this->sanitizeInput($_POST['password']);
            $role_id = $this->sanitizeInput($_POST['input_role']);
            $isValid = $this->validateForm($name, $email, $password, $role_id);
            if ($isValid) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if ($password == $password_again) {
                        if ($role_id == 3) {
                            $account->add_expert($role_id, $name, null, null, $email, null, null, null, $account->getImg(), 5, null, 'Chuyên gia tâm lý', 'Hoạt động');
                        }
                        $result = $account->signUpAccount($name, $password, $email, $role_id);
                        if ($result) {
                            $new_user_name = base64_encode($name);
                            setcookie("User", $new_user_name, time() + (86400 * 30), "/"); // 86400 = 1 day
                            $_SESSION['sesscess'] = true;

                            echo '<script>window.location.href = "home";</script>';
                            exit;
                        } else {
                             $_SESSION['error'] = true;
                            exit;
                        }
                    } else {
                         $_SESSION['error'] = true;
                        exit;
                    }
                } else {
                     $_SESSION['error'] = true;
                    exit;
                }
            } else {
                $_SESSION['error'] = true;
                exit;
            }
        }

        include("../../BitStorm/View/Account/SignUpView.php");

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

