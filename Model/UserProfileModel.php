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
    public function change_avatar_expert($newAvatarUrl)
    {
        $blog = new Blog();
        $conn = $blog->connect_database();
        $username = base64_decode($_COOKIE['User']);
        $sql = "UPDATE experts SET profile_picture = :newAvatarUrl WHERE full_name = :username";
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
    public function get_bookings($id)
    {
        if (isset($id)) {
            $blog = new Blog();
            $conn = $blog->connect_database();
            $sql = "SELECT  *,users.name as user_name, experts.full_name as expert_name,bookings.link_room as link_room_booking, bookings.created_at as create_at_booking  from bookings join users on users.id = bookings.user_id join experts on experts.id = bookings.expert_id where users.id = :id order by create_at_booking DESC ;";
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
    public function get_bookings_experts($id)
    {
        if (isset($id)) {
            $blog = new Blog();
            $conn = $blog->connect_database();
            $sql = "SELECT  *,users.name as user_name, experts.full_name as expert_name, bookings.link_room as link_room_booking,bookings.created_at as create_at_booking  from bookings join users on users.id = bookings.user_id join experts on experts.id = bookings.expert_id where experts.id = :id order by create_at_booking DESC ;";
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
    public function get_info_expert($name)
    {
        if (isset($name)) {
            $blog = new Blog();
            $conn = $blog->connect_database();
            $query = "SELECT * FROM experts WHERE full_name = :name";
            $statement = $conn->prepare($query);
            $statement->bindParam(':name', $name);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    public function add_calendar_for_expert($id, $day, $start_time, $end_time, $price, $describer, $status)
    {
        if (isset($id)) {
            $blog = new Blog();
            $conn = $blog->connect_database();
            $query = "INSERT INTO calendar (day, start_time, end_time, price, describer, expert_id,status) VALUES (:day, :start_time, :end_time, :price, :describer, :expert_id,:status)";
            $statement = $conn->prepare($query);
            $statement->bindParam(':day', $day);
            $statement->bindParam(':start_time', $start_time);
            $statement->bindParam(':end_time', $end_time);
            $statement->bindParam(':price', $price);
            $statement->bindParam(':describer', $describer);
            $statement->bindParam(':status', $status);
            $statement->bindParam(':expert_id', $id); // Assuming $id is the expert_id
            $statement->execute();
            return true; // Indicate success
        } else {
            return false; // Indicate failure
        }
    }

    public function get_calendar_by_id_expert($id_expert)
    {
        if (isset($id_expert)) {
            $blog = new Blog();
            $conn = $blog->connect_database();
            $query = "SELECT * from calendar where expert_id = :id";
            $statement = $conn->prepare($query);
            $statement->bindParam(":id", $id_expert);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        return null;
    }
    public function get_booking_expert($id_expert)
    {
        if (!isset($id_expert) || empty($id_expert)) {
            return null;
        }

        $blog = new Blog();
        $conn = $blog->connect_database();
        // Sử dụng biến ràng buộc để tránh SQL injection
        $query = 'SELECT *, users.name as user_name
                  FROM bookings
                  INNER JOIN calendar ON calendar.id = bookings.calendar_id
                  INNER JOIN users ON users.id = bookings.user_id
                  WHERE calendar.status = "Ngưng hoạt động" AND calendar.expert_id = :id';
        $statement = $conn->prepare($query);
        $statement->bindParam(":id", $id_expert);  // Chắc chắn rằng id_expert là một số nguyên
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

}
