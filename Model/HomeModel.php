<?php
include_once("../Model/ConnectDataBase.php");
include_once("../Controller/HomeController.php");
class Home extends Connection
{
    function selectNews()
    {
        $db = $this->connect_database();
        $stmt = $db->prepare("SELECT * FROM news ORDER BY RAND() LIMIT 1");
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }
    function showAllVideo()
    {
        $db = $this->connect_database();
        $video = $db->prepare("SELECT * FROM podcasts ORDER BY RAND() LIMIT 4 ");
        $video->execute();
        $result = $video->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
