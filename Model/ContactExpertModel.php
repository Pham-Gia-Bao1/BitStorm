<?php
include_once("../Model/ConnectDataBase.php");

class Expert extends Connection
{
    public function getExpertsWithCalendar($currentDate)
    {
        $this->connect_database();
        $sql_query = "SELECT experts.*, calendar.day,
        TIME_FORMAT(calendar.start_time, '%H:%i') AS start_time,
        TIME_FORMAT(calendar.end_time, '%H:%i') AS end_time, calendar.price
        FROM experts
        JOIN calendar ON experts.id = calendar.expert_id
        WHERE calendar.day >= :currentDate AND experts.status = 1";
        $stst = $this->conn->prepare($sql_query);
        $stst->bindValue(':currentDate', $currentDate, PDO::PARAM_STR);
        $stst->execute();
        $expertsWithCalendar = $stst->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $expertsWithCalendar;
    }

    public function searchExperts($keyword, $currentDate)
    {
        $this->connect_database();
        $sql_query = "SELECT experts.*, calendar.day,
        TIME_FORMAT(calendar.start_time, '%H:%i') AS start_time,
        TIME_FORMAT(calendar.end_time, '%H:%i') AS end_time,
        calendar.price, calendar.describer
        FROM experts
        JOIN calendar ON experts.id = calendar.expert_id
        WHERE (experts.full_name LIKE :keyword
        OR experts.experience LIKE :keyword
        OR (DATE_FORMAT(calendar.start_time, '%h:%i %p') LIKE :keyword)
        OR (DATE_FORMAT(calendar.end_time, '%h:%i %p') LIKE :keyword)
        OR calendar.day LIKE :keyword)
        AND calendar.day >= :currentDate AND experts.status = 1";
        $stst = $this->conn->prepare($sql_query);
        $stst->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);
        $stst->bindValue(':currentDate', $currentDate, PDO::PARAM_STR);
        $stst->execute();
        $findExperts = $stst->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $findExperts;
    }

}

?>
