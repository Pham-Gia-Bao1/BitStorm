<?php
$cookie_name = "User";
if (isset($_COOKIE[$cookie_name])) {

    include("../Model/PostModel.php");
    include_once("../Model/AccountModel.php");
    
    $Post= new Post();
    $posts=$Post->GetAllPostsAndUserName_Img();

    
    
    // var_dump($posts);
    $account = new Account();
    $nameAndImg=$account->get_name_and_img_user();

    // xử lí đăng bài
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (!empty($_POST['content'])){
        $isAnonymous= isset($_POST['isAnonymous'])?($_POST['isAnonymous']):1;
        $id=$Post->get_id($nameAndImg[0]);
        $likeCount=0;
        $content =htmlspecialchars($_POST['content']); 
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
}else{
    echo "<script> alert ('Vui lòng đăng nhập') </script>";
}

?>