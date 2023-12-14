<?php
include_once("../Model/AccountModel.php");
class log_in
{
    public function log_in()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $account = new Account();
            $name = $this->sanitizeInput($_POST['username']);
            $email = $this->sanitizeInput($_POST['email']);
            $password = $this->sanitizeInput($_POST['password']);
            $result = $account->login($name, $email, $password);
            if ($result) {
              echo '<script>alert("Đăng nhập thành công!");</script>';
              header("Location: home");
                exit;
            } else {
                echo '<script>alert("Đăng nhập thất bại!");</script>';
                echo '<script>window.location.href = "home";</script>';
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
?>
