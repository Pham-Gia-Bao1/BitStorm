<?php
include_once("../Model/ConnectDataBase.php");

class ExpertDetail extends Connection {

    public function getExpertDetail($id){
        $this->connect_database();
        $sql_query = "SELECT experts.*,
        DATE_FORMAT(calendar.day,'%d/%m/%Y') AS day,
        TIME_FORMAT(calendar.start_time, '%H:%i') AS start_time,
        TIME_FORMAT(calendar.end_time, '%H:%i') AS end_time, calendar.price
        FROM experts
        JOIN calendar ON experts.id = calendar.expert_id
        WHERE experts.id = :id";
        $stst = $this->conn->prepare($sql_query);
        $stst->bindValue(':id', $id, PDO::PARAM_STR);
        $stst->execute();
        $expertDetail = $stst->fetch(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $expertDetail;
    }

    public function getRecommendExperts($currentDate)
    {
        $this->connect_database();
        $sql_query = "SELECT experts.*, 
        DATE_FORMAT(calendar.day,'%d/%m/%Y') AS day,
        TIME_FORMAT(calendar.start_time, '%H:%i') AS start_time,
        TIME_FORMAT(calendar.end_time, '%H:%i') AS end_time, calendar.price
        FROM experts
        JOIN calendar ON experts.id = calendar.expert_id
        WHERE calendar.day >= :currentDate";
        $stst = $this->conn->prepare($sql_query);
        $stst->bindValue(':currentDate', $currentDate, PDO::PARAM_STR);
        $stst->execute();
        $expertsWithCalendar = $stst->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $expertsWithCalendar;
    }
}
?>