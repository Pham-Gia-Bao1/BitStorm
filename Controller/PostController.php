<?php
 include("../Model/PostModel.php");
 include_once("../Model/AccountModel.php");
$cookie_name = "User";
if (isset($_COOKIE[$cookie_name])) {
    $Post= new Post();
    $posts=$Post->GetAllPostsAndUserName_Img();
    // var_dump($posts);
    $account = new Account();
    $nameAndImg=$account->get_name_and_img_user();
    $userId=$Post->get_id($nameAndImg[0]);
    // if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['postId']) && isset($_GET['isLiked'])) {
    //     $postId = $_GET['postId'];
    //     $isLiked = $_GET['isLiked']; // true/false
    //     if ($isLiked){
    //         $Post->deleteOneLike($postId,$userId);

    //     }else{
    //         $Post->addOneLike($postId,$userId);
    //     }
    // }
    // xử lí đăng bài
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (($_POST['action'])=="likePost") {
            $postId = $_POST['postId'];
            $isLiked = $Post->isPostLikedByUser($postId, $userId);
            if ($isLiked){
                $result=$Post->deleteOneLike($postId,$userId);
                $currentLike = $Post->getLikeCount($postId);
                echo $currentLike;
            }else{
                $result= $Post->addOneLike($postId,$userId);
                $currentLike = $Post->getLikeCount($postId);
                echo $currentLike;
            }
            return;
        };
        if (($_POST['action'])=="createComment"){
            $post_id=htmlspecialchars($_POST['post_id']);
            $content =htmlspecialchars($_POST['content']);
            $Post->CreateComment($post_id,$content,$userId);
            header("Location: Post");
        }elseif (($_POST['action'])=="createPost"){
            $isAnonymous= isset($_POST['isAnonymous'])?($_POST['isAnonymous']):1;
            $likeCount=0;
            $content =htmlspecialchars(trim($_POST['content'])) ;
            $post=[
                "userid" => $userId,
                "isAnonymous"=>$isAnonymous,
                "likeCount"=> $likeCount,
                "content" => $content,
            ];
            $Post->CreatePost($post);
            header("Location: Post");
        }

    }

    include("../View/Post/PostView.php");
}else {
        echo "<script> alert ('Vui lòng đăng nhập') </script>";
    };

?>