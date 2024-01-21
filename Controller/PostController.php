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
    // xử lí đăng bài
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (($_POST['action'])=="createComment"){
            $user_id=$Post->get_id($nameAndImg[0]);
            $post_id=htmlspecialchars($_POST['post_id']);
            $content =htmlspecialchars($_POST['content']);
            $Post->CreateComment($post_id,$content,$user_id);
            header("Location: Post");
        }elseif (($_POST['action'])=="createPost"){
            $isAnonymous= isset($_POST['isAnonymous'])?($_POST['isAnonymous']):1;
            $id=$Post->get_id($nameAndImg[0]);
            $likeCount=0;
            $content =htmlspecialchars(trim($_POST['content'])) ;
            $post=[
                "userid" => $id,
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