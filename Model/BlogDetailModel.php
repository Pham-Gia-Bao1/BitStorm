<?php

include_once("../Model/ConnectDataBase.php");
class BlogDetail extends Connection
{
    public function get_one_video($id)
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM videos WhERE id = :id";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $video = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $video;
    }

    public function get_one_podcast($id)
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM podcasts WhERE id = :id";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $video = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $video;
    }

    public function get_comment_video_for_user($id)
    {
        if (isset($id)) {
            $this->connect_database();
            $sql_query = "SELECT * FROM comment_videos WHERE video_id = :id";
            $stmt = $this->conn->prepare($sql_query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $comment_videos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $comment_videos;
        }
        return null;
    }
    public function get_comment_podcast_for_user($id)
    {
        if (isset($id)) {
            $this->connect_database();
            $sql_query = "SELECT * FROM comment_podcast WHERE podcast_id = :id";
            $stmt = $this->conn->prepare($sql_query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $comment_podcasts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $comment_podcasts;
        }
        return null;
    }
    // public function add_comment_for_videos($user_id,$video_id,$content){

    //     if (isset($user_id)) {
    //         $this->connect_database();
    //         $sql_query = "INSERT INTO comment_videos VALUE ("
    //         $stmt = $this->conn->prepare($sql_query);
    //         $stmt->bindParam(":id", $id);
    //         $stmt->execute();
    //         $comment_podcasts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //         return $comment_podcasts;
    //     }
    //     return null;
    // }


}
