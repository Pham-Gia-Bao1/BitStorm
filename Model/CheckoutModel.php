<?php
include_once("../Model/ConnectDataBase.php");

class Checkout extends Connection
{

    public function getExpert($id)
    {
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

    


}
