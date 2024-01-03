<?php
include_once("../Model/ConnectDataBase.php");

class AdminComment extends Blog{
    public function get_all_comments(){
        // $this->connect_database();
        $this->connect_database();
        $sql_query = " SELECT *,comment_videos.id as id_comment,comment_videos.like_count as like_count_comment , comment_videos.dislike_count as dislike_count_comment from comment_videos inner join videos on videos.id = comment_videos.video_id inner join users on users.id = comment_videos.user_id order by id_comment  ;";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $comments;
    }
    public function get_one_coments_video($id){
        $this->connect_database();
        $sql_query = "SELECT *,users.name as username ,comment_videos.id as id_comment ,comment_videos.like_count as like_count_comment , comment_videos.dislike_count as dislike_count_comment from comment_videos inner join videos on videos.id = comment_videos.video_id inner join users on users.id = comment_videos.user_id  where comment_videos.id =:id;";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $comment = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $comment;
    }

    public function update_comments_video($id, $content, $create_at, $video_id, $user_id, $like_count, $dislike_count) {
        $this->connect_database();
        $sql_query = "UPDATE comment_videos SET content = :content, created_at = :create_at, video_id = :video_id, user_id = :user_id, like_count = :like_count, dislike_count = :dislike_count WHERE id = :id";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":create_at", $create_at);
        $stmt->bindParam(":video_id", $video_id);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":like_count", $like_count);
        $stmt->bindParam(":dislike_count", $dislike_count);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $this->closeConnection();
        return true;
    }

    public function delete_comment($arr){
        $this->connect_database();
        if (!empty($arr)) {
            foreach ($arr as $comment_id) {
                $sql_query = "DELETE FROM comment_videos WHERE id = :id";
                $stmt = $this->conn->prepare($sql_query);
                $stmt->bindParam(":id", $comment_id);
                $stmt->execute();
            }
            return true;
        } else {
            return false;
        }
    }

    public function get_all_comments_podcasts(){
        $this->connect_database();
        $sql_query = "SELECT *,users.name as username ,comment_podcast.id as id_comment,comment_podcast.like_count as like_count_comment , comment_podcast.dislike_count as dislike_count_comment from comment_podcast inner join podcasts on podcasts.id = comment_podcast.podcast_id inner join users on users.id = comment_podcast.user_id order by id_comment ;";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $comments;
    }

    public function get_one_comment_podcast($id){
        $this->connect_database();
        $sql_query = "SELECT *,users.name as username ,comment_podcast.id as id_comment,comment_podcast.like_count as like_count_comment , comment_podcast.dislike_count as dislike_count_comment from comment_podcast inner join podcasts on podcasts.id = comment_podcast.podcast_id inner join users on users.id = comment_podcast.user_id order by id_comment where comment_podcast.id =:id";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $comment = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $comment;
    }

    public function update_comments_podcast($id, $content, $create_at, $video_id, $user_id, $like_count, $dislike_count) {
        $this->connect_database();
        $sql_query = "UPDATE comment_podcast SET content = :content, created_at = :create_at, video_id = :video_id, user_id = :user_id, like_count = :like_count, dislike_count = :dislike_count WHERE id = :id";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":create_at", $create_at);
        $stmt->bindParam(":video_id", $video_id);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":like_count", $like_count);
        $stmt->bindParam(":dislike_count", $dislike_count);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $this->closeConnection();
        return true;
    }

    public function delete_comment_podcast($id){
        $this->connect_database();
        if (!empty($arr)) {
            foreach ($arr as $comment_id) {
                $sql_query = "DELETE FROM comment_podcast WHERE comment_podcast.id = :id";
                $stmt = $this->conn->prepare($sql_query);
                $stmt->bindParam(":id", $comment_id);
                $stmt->execute();
            }
            return true;
        } else {
            return false;
        }
    }
}