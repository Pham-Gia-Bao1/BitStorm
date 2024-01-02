<?php
include_once("../Model/ConnectDataBase.php");
include("../Model/BlogModel.php");
class Post extends Connection
{
    //get all post
    public function GetAllPostsAndUserName_Img()
    {
        $this->connect_database();
        // $query="SELECT posts.*, users.name, users.img, comment_posts.content as comment_content,comment_posts.author as authorComment 
        // FROM posts 
        // JOIN users ON posts.user_id = users.id
        // LEFT JOIN comment_posts ON posts.id = comment_posts.post_id;";
        $query =  "SELECT posts.*, users.name, users.img FROM posts
        JOIN users ON posts.user_id = users.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        // Thêm thông tin thời gian đăng bài vào mỗi bài đăng
        foreach ($posts as &$post) {
        $post['timeElapsed'] = $this->TimePost($post['created_at']);
        $comments =$this -> GetCommentsByPostId($post['id']);
        if (!empty($comments)) {
            $post['comment'] =$comments; //mảng comments
        } else {
            $post['comment'] =$comments; //null
        }
        }

        return $posts;
    }
    //show comment thương ứng với mỗi post id
    public function GetCommentsByPostId($postId) {
        $conn = $this->connect_database();
        $sql = "SELECT * FROM comment_posts WHERE post_id = :postId";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':postId', $postId, PDO::PARAM_INT);
        $stmt->execute();
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return ($stmt->rowCount() > 0) ? $comments : null;

    }
    // truy vấn tên user thông qua userid
    public function getOneUser($id)
    {
        // $blog = new Blog();
        $conn = $this->connect_database();
        $sql = "SELECT * FROM users WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    //tính thoi gian lúc đăng đến giờ hiện tại
    public function TimePost($datetime){
        $conn = $this->connect_database();
        $currentTime = date("Y-m-d H:i:s");
        $beforeTime = new DateTime($datetime);
        $currentTime = new DateTime($currentTime);

        $Time = $beforeTime->diff($currentTime);

        $numberOfDays = $Time->d;
        $numberOfHours = $Time->h;
        $numberOfMinutes = $Time->i;

        if ($numberOfDays > 0) {
            return "$numberOfDays ngày trước";
        } elseif ($numberOfHours > 0) {
            return "$numberOfHours giờ trước";
        } else {
            return "$numberOfMinutes phút trước";
        }

    }

    public function CreatePost($post)
    {
        // $blog = new Blog();
        $conn = $this->connect_database();
        // $username = base64_decode($_COOKIE['User']);
        $sql = "INSERT INTO posts (user_id, like_count, isAnonymous,content) VALUES (:userid, :likeCount, :isAnonymous,:content)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':userid',$post['userid']);
        $stmt->bindParam(':likeCount', $post['likeCount']);
        $stmt->bindParam(':isAnonymous', $post['isAnonymous']);
        $stmt->bindParam(':content', $post['content']);
        $stmt->execute();
        $this->closeConnection();

    }
    //get id
    public function get_id($username)
    {
        // $blog = new Blog();
        $conn = $this->connect_database();
        // $username = base64_decode($_COOKIE['User']);
        $sql = "SELECT id FROM users WHERE name = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $id=$result['id'];
        $this->closeConnection();
        return $id;
    }
    //lượt like
    public function countLike($idPost){

    }
}