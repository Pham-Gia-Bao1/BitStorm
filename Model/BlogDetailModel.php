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

    public function get_author($video_id)
    {
        if (isset($video_id)) {
            $this->connect_database();
            $sql_query = "SELECT * FROM videos JOIN authors ON videos.author_id = authors.id WHERE videos.id = :id;";
            $stmt = $this->conn->prepare($sql_query);
            $stmt->bindParam(":id", $video_id);
            $stmt->execute();
            $author = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $author;
        }
        return null;
    }
    public function add_comment_videos($user_id, $content, $video_id) {
        if (isset($user_id) && isset($content)) {
            $this->connect_database();
            $date_time = date("Y-m-d H:i:s");
            $sql_query = "INSERT INTO comment_videos (content, author, created_at, video_id, user_id, like_count, dislike_count)
                          VALUES (:content, :author, :created_at, :video_id, :user_id, :like_count, :dislike_count)";
            $stmt = $this->conn->prepare($sql_query);
            $author = null;
            $like_count = 0;
            $dislike_count = 0;
            $stmt->bindParam(":content", $content);
            $stmt->bindParam(":author", $author);
            $stmt->bindParam(":created_at", $date_time);
            $stmt->bindParam(":video_id", $video_id);
            $stmt->bindParam(":user_id", $user_id);
            $stmt->bindParam(":like_count", $like_count);
            $stmt->bindParam(":dislike_count", $dislike_count);
            $stmt->execute();
            return true;
        }
        return false;
    }
    public function add_comment_podcast($user_id, $content, $video_id) {
        if (isset($user_id) && isset($content)) {
            $this->connect_database();
            $date_time = date("Y-m-d H:i:s");
            $sql_query = "INSERT INTO comment_podcast (content, created_at, podcast_id, user_id, like_count, dislike_count)
                          VALUES (:content, :created_at, :video_id, :user_id, :like_count, :dislike_count)";
            $stmt = $this->conn->prepare($sql_query);
            // $author = null;
            $like_count = 0;
            $dislike_count = 0;
            $stmt->bindParam(":content", $content);
            // $stmt->bindParam(":author", $author);
            $stmt->bindParam(":created_at", $date_time);
            $stmt->bindParam(":video_id", $video_id);
            $stmt->bindParam(":user_id", $user_id);
            $stmt->bindParam(":like_count", $like_count);
            $stmt->bindParam(":dislike_count", $dislike_count);
            $stmt->execute();
            return true;
        }
        return false;
    }

    // public function get_replies_videos()
}
