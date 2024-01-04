<?php
include_once("../Model/ConnectDataBase.php");

class Checkout extends Connection
{

    public function createBooking($userID, $expertID, $calendarID, $note)
    {
        $this->connect_database();
        $sql = "INSERT INTO bookings (user_id, expert_id, calendar_id, note, created_at, status, rating) 
            VALUES (:user_id, :expert_id, :calendar_id, :note, NOW(), 'pending', NULL)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $userID, PDO::PARAM_INT);
        $stmt->bindParam(':expert_id', $expertID, PDO::PARAM_INT);
        $stmt->bindParam(':calendar_id', $calendarID, PDO::PARAM_INT);
        $stmt->bindParam(':note', $note, PDO::PARAM_STR);
        $success = $stmt->execute();
        $this->closeConnection();
        return $success;
    }

}
