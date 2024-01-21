<?php
session_start();
include_once("../Model/AccountModel.php");
class log_in
{
    public function log_in()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $password_error = "";

            $account = new Account();
           
            if(isset($_POST['username']) && isset($_POST['email'])){
                $name = $this->sanitizeInput($_POST['username']);
                $email = $this->sanitizeInput($_POST['email']);
                $password = $this->sanitizeInput($_POST['password']);
                $result = $account->login($name, $email, $password);
                if ($result) {
                    $new_user_name = base64_encode($name);
                    setcookie("User", $new_user_name, time() + (86400 * 30), "/"); // 86400 = 1 day
                    $_SESSION['sesscess'] = true;
                    header("Location: home");
                    exit;
                } else {
                    $_SESSION['error'] = true;
                    header("Location: home");
                }
            }
        }
    }
    private function sanitizeInput($input)
    {
        $sanitizedInput = trim($input);
        $sanitizedInput = htmlspecialchars($sanitizedInput, ENT_QUOTES | ENT_HTML5);
        return $sanitizedInput;
    }
}
$login = new log_in();
$login->log_in();
