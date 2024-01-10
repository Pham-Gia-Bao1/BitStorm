<?php
include "../Model/ConnectDataBase.php";
?>
<?php
class AdminHomPage extends Connection{
    public function countUser(){
        $conn = $this->connect_database();
        $sql="SELECT COUNT(*)
        FROM users
        WHERE role_id = 1;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $countUser = $stmt->fetch(PDO::FETCH_ASSOC);
        return $countUser;
    }
    public function countExpert(){
        $conn = $this->connect_database();
        $sql="SELECT COUNT(*)
        FROM experts
        WHERE role_id = 3;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $countExpert = $stmt->fetch(PDO::FETCH_ASSOC);
        return $countExpert;
    }
    public function countBooking(){
        $conn = $this->connect_database();
        $sql="SELECT COUNT(*)
        FROM bookings;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $countBookings = $stmt->fetch(PDO::FETCH_ASSOC);
        return $countBookings;
    }
    public function countPost(){
        $conn = $this->connect_database();
        $sql="SELECT COUNT(*)
        FROM posts;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $countPost = $stmt->fetch(PDO::FETCH_ASSOC);
        return $countPost;
    }
    public function showRecentBooked(){
        $conn = $this->connect_database();
        $sql="SELECT users.name AS userName, experts.full_name AS expertName, calendar.day AS calendarDay,calendar.start_time, calendar.end_time
        FROM bookings
        JOIN users ON bookings.user_id = users.id
        JOIN experts ON bookings.expert_id = experts.id
        JOIN calendar ON bookings.calendar_id = calendar.id
        ORDER BY bookings.created_at DESC;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $Bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $Bookings;
    }
}
?>