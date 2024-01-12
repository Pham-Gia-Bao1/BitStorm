<?php
include_once("../Model/ConnectDataBase.php");

class AdminBooking extends Blog
{
    public function get_all_bookings()
    {
        $this->connect_database();
        $sql_query = "SELECT * from bookings order by id DESC;";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $bookings;
    }

    public function update_booking($id, $user_id, $expert_id, $calendar_id, $note, $created_at, $status, $rating)
    {
        $this->connect_database();
        $sql_query = "UPDATE bookings SET user_id = :user_id, expert_id = :expert_id, calendar_id = :calendar_id, note = :note, created_at = :created_at, status = :status, rating = :rating  WHERE id = :id";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":expert_id", $expert_id);
        $stmt->bindParam(":calendar_id", $calendar_id);
        $stmt->bindParam(":note", $note);
        $stmt->bindParam(":created_at", $created_at); // Corrected variable name here
        $stmt->bindParam(":status", $status);
        $stmt->bindParam(":rating", $rating);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $this->closeConnection();
        return true;
    }


    public function delete_booking($id){
         $this->connect_database();
         $sql_query = "DELETE FROM bookings WHERE id = :id";
         $stmt = $this->conn->prepare($sql_query);
         $stmt->bindParam(":id", $id);
         $stmt->execute();
         return true;
    }
    public function get_one_booking($id){
        $this->connect_database();
        $sql_query = "SELECT * from bookings where id = :id;";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $booking = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $booking;
    }
}
