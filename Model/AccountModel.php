<?php
include_once("../Model/BlogModel.php");

class Account
{
    private $user_name = "";
    private $password = "";
    private $email = "";
    private $img = "https://cdn-icons-png.flaticon.com/512/3177/3177440.png";
    private $conn;
    public function __construct($name = "", $password = "", $email = "", $img = "")
    {
        $this->user_name = $name;
        $this->password = $password;
        $this->email = $email;
        if (!empty($img)) {
            $this->img = $img;
        }
    }
    public function getImg()
    {
        return $this->img;
    }
    public function getUserName()
    {
        return $this->user_name;
    }
    public function setUserName($name)
    {
        $this->user_name = $name;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setImg($img)
    {
        $this->img = $img;
    }

    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    // Sign up function
    public static function signUpAccount($username, $password, $email)
    {
        if (!empty($username) && !empty($password) && !empty($email)) {
            $account = new Account($username, $password, $email);
            $blog = new Blog();
            $conn = $blog->connect_database();
            $sql_check = "SELECT * FROM users WHERE email = :email";
            $stmt_check = $conn->prepare($sql_check);
            $stmt_check->bindParam(':email', $email);
            $stmt_check->execute();
            if ($stmt_check->rowCount() > 0) {
                return false;
            }
            // Insert the new user into the users table
            $sql = "INSERT INTO users (name, email, password, role, img)
                    VALUES (:username, :email, :password, 2, :img)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $img = $account->getImg();
            $stmt->bindParam(':img', $img);
            $stmt->execute();
            $blog->closeConnection();

            return true;
        }
        return false;
    }
    // Login function
    public static function login($name,$email, $password)
    {
        if (!empty($email) && !empty($password)) {
            $blog = new Blog();
            $conn = $blog->connect_database();
            $sql = "SELECT users.id FROM users WHERE users.name = :name and users.email = :email AND users.password = :password";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $blog->closeConnection();
            return true;
        }
        return false;
    }
    public function logOut()
    {
        // Remove the User cookie
        setcookie("User", "", time() - 3600, "/"); // Setting an expired time in the past deletes the cookie
        // Reload the page
        header("Location: home");
        exit;
    }
    public function get_name_and_img_user()
    {
        $blog = new Blog();
        $conn = $blog->connect_database();
        $username = base64_decode($_COOKIE['User']);
        $sql = "SELECT name, img FROM users WHERE name=:username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $name_and_img = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($name_and_img, $row['name']);
            array_push($name_and_img, $row['img']);
        }
        return $name_and_img; // mảng có length = 2
    }
    public function change_avatar($newAvatarUrl)
    {
        $blog = new Blog();
        $conn = $blog->connect_database();
        // Lấy tên người dùng từ cookie
        $username = base64_decode($_COOKIE['User']);
        // Cập nhật đường dẫn hình đại diện mới trong cơ sở dữ liệu
        $sql = "UPDATE users SET img = :newAvatarUrl WHERE name = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':newAvatarUrl', $newAvatarUrl);
        $stmt->bindParam(':username', $username);
        $result = $stmt->execute();

        // Đóng kết nối đến cơ sở dữ liệu
        $blog->closeConnection();

        return $result;
    }
    public function updateUserInfo($newName, $newPassword, $newEmail)
    {
        $blog = new Blog();
        $conn = $blog->connect_database();
        $username = base64_decode($_COOKIE['User']);
        $sql = "UPDATE users SET name = :newName, password = :newPassword, email = :newEmail WHERE name = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':newName', $newName);
        $stmt->bindParam(':newPassword', $newPassword);
        $stmt->bindParam(':newEmail', $newEmail);
        $stmt->bindParam(':username', $username);
        $result = $stmt->execute();
        $new_user_name = base64_encode($newName);
        setcookie("User", $new_user_name, time() + (86400 * 30), "/"); // 86400 = 1 day
        $blog->closeConnection();
        return $result;
    }
}
