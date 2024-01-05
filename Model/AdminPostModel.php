<?php 
require_once ("../Model/ConnectDataBase.php");

class AdminPosts extends Connection{
    public function getOnePost($id){
        $conn= $this->connect_database();
        $query="SELECT * FROM posts where id = :id;";
        $stmt = $conn -> prepare($query);
        $stmt->execute([":id"=>$id]);
        $post=$stmt->fetch(); 
        return $post;
    }
    public function getAllPost(){
        $conn= $this->connect_database();
        $query="SELECT * FROM posts ;";
        $stmt = $conn -> prepare($query);
        $stmt->execute();
        $post=$stmt->fetchAll(); 
        return $post;
        $this->closeConnection();
    }
    //create post admin reuse PostModel
    // update post
    public function UpdatePost($post){
        $conn= $this-> connect_database();
        $query = "UPDATE posts
        SET user_id = :user_id, 
            like_count = :like_count, 
            isAnonymous = :isAnonymous,
            content = :content
        WHERE id = :id;";
        $stmt = $conn -> prepare($query);
        $stmt->bindParam(':id',$post['id']);
        $stmt->bindParam(':user_id',$post['userid']);
        $stmt->bindParam(':like_count', $post['likeCount']);
        $stmt->bindParam(':isAnonymous', $post['isAnonymous']);
        $stmt->bindParam(':content', $post['content']);
        $stmt->execute();

        $this -> closeConnection();
    }
    //delete post
    public function deletePost($id){
        $conn =$this->connect_database();
        $query = "DELETE FROM posts WHERE id = :id";
        $stmt =$conn -> prepare($query);
        $stmt->execute([':id'=>$id]);
        $this->closeConnection();
    }
    // =============USER=========
    public function getAllUser(){
        $conn= $this->connect_database();
        $query="SELECT * FROM users ;";
        $stmt = $conn -> prepare($query);
        $stmt->execute();
        $users=$stmt->fetchAll(); 
        return $users;
        $this->closeConnection();
    } 
}
?>