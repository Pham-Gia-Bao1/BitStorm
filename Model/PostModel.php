<?php
include_once("../Model/ConnectDataBase.php");
// include("../Model/BlogModel.php");
class Post extends Connection
{
    //get all post
    public function GetAllPostsAndUserName_Img()
    {
        $this->connect_database();
        $query =  "SELECT posts.*, users.name, users.img FROM posts
        JOIN users ON posts.user_id = users.id order by posts.id DESC" ;
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
        date_default_timezone_set("Asia/Bangkok");
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
        $conn = $this->connect_database();
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
        $conn = $this->connect_database();
        $sql = "SELECT id FROM users WHERE name = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $id=$result['id'];
        $this->closeConnection();
        return $id;
    }
    public function getLikeCount($postId){
        $conn= $this->connect_database();
        $sql= "SELECT like_count FROM posts WHERE id = :postId;";
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(':postId', $postId);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['like_count'];
    }
    //thêm lượt likepost
    public function addOneLike($postId, $userId){
        $conn= $this->connect_database();
        $sql= "INSERT INTO like_posts(user_id, post_id) VALUES (:userId,:postId);";
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':postId', $postId);
        $stmt->execute();
        // if ($stmt->execute()) {
        //     // Truy vấn thành công
        // } else {
        //     // Truy vấn thất bại, in thông tin lỗi
        //     print_r($stmt->errorInfo());
        // }
        $this->closeConnection();
        return true;
    }
    // xóa lượt like 
    public function deleteOneLike($postId, $userId){
        $conn= $this->connect_database();
        $sql= "DELETE FROM like_posts WHERE user_id = :userId AND post_id = :postId;";
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':postId', $postId);
        $stmt->execute();
        $this->closeConnection();
        return false;
    }
    public function getAllPostsUserLiked($userId){
        $conn= $this->connect_database();
        $sql= "SELECT posts.* FROM like_posts JOIN Posts ON like_posts.post_id = posts.id WHERE like_posts.user_id = :userId;";
        $stmt= $conn->prepare($sql);
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->closeConnection();
        return $result;
    }
    //kiểm tra xem bài viết đã được like hay chưa?
    function isPostLikedByUser($postId, $userId) {
        $conn= $this->connect_database();
        $query = "SELECT COUNT(*) AS user_like_count FROM like_posts WHERE user_id = :userId AND post_id = :postId";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':postId', $postId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return ($result['user_like_count'] > 0);
    }
    public function createComment($postId, $content, $user_id ){
        $conn = $this->connect_database();
        $sql = "INSERT INTO comment_posts (user_id,content,post_id) VALUES (:userid,:content,:postid)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':userid', $user_id);
        $stmt->bindParam(':postid', $postId);
        $stmt->bindParam(':content', $content);
        $stmt->execute();
        $this->closeConnection();
    }
}