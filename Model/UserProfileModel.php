<?php
include_once("../Model/BlogModel.php");
include_once("../Model/AccountModel.php");
class UserProfile extends Account
{
    public function get_name_and_img_user_by_id($id)
    {
        $blog = new Blog();
        $conn = $blog->connect_database();
        $sql = "SELECT * from users where users.id = :id;";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $blog->closeConnection();
        return $result;
    }
    public function change_avatar($newAvatarUrl)
    {
        $blog = new Blog();
        $conn = $blog->connect_database();
        $username = base64_decode($_COOKIE['User']);
        $sql = "UPDATE users SET img = :newAvatarUrl WHERE name = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':newAvatarUrl', $newAvatarUrl);
        $stmt->bindParam(':username', $username);
        $result = $stmt->execute();
        $blog->closeConnection();
        return $result;
    }
    public function get_name_pass_email_user()
    {
        $blog = new Blog();
        $conn = $blog->connect_database();
        $username = base64_decode($_COOKIE['User']);
        $sql = "SELECT name, password, email FROM users WHERE name = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $name_pass_email = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $name_pass_email[] = $row['name'];
            $name_pass_email[] = $row['password'];
            $name_pass_email[] = $row['email'];
        }
        $blog->closeConnection();
        return $name_pass_email;
    }
    public function get_post($id)
    {
        if (isset($id)) {
            $blog = new Blog();
            $conn = $blog->connect_database();
            $sql = "SELECT *,posts.created_at as created_at_post,posts.content as content_posts from posts join users on posts.user_id = users.id where users.id = :id ORDER BY created_at_post DESC;";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($result > 1) {
                return $result;
            }
            return null;
        }
        return null;
    }
    public function get_bookings($id){
        if (isset($id)) {
            $blog = new Blog();
            $conn = $blog->connect_database();
            $sql = "SELECT  users.name as user_name, experts.full_name as expert_name, bookings.created_at as create_at_booking  from bookings join users on users.id = bookings.user_id join experts on experts.id = bookings.expert_id where users.id = :id order by create_at_booking asc ;";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($result > 1) {
                return $result;
            }
            return null;
        }
        return null;
    }
}
