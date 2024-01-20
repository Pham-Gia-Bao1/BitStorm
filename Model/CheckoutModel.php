<?php
include_once("../Model/ConnectDataBase.php");

class Checkout extends Connection
{

    public function createBooking($userID, $expertID, $calendarID, $note, $link_room)
    {
        $this->connect_database();
        $sql = "INSERT INTO bookings (user_id, expert_id, calendar_id, note, created_at, status, rating,link_room)
            VALUES (:user_id, :expert_id, :calendar_id, :note, NOW(), 'Hoạt động', 5,:link_room)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $userID, PDO::PARAM_INT);
        $stmt->bindParam(':expert_id', $expertID, PDO::PARAM_INT);
        $stmt->bindParam(':calendar_id', $calendarID, PDO::PARAM_INT);
        $stmt->bindParam(':note', $note, PDO::PARAM_STR);
        $stmt->bindParam(':link_room', $link_room);
        $success = $stmt->execute();
        $this->closeConnection();
        return $success;
    }

}
