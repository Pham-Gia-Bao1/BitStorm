<?php
include_once("../Model/BlogDetailModel.php");
include_once("../Model/BlogModel.php");
include_once("../Model/AccountModel.php");
$account = new Account();
$blog = new Blog();
$blogDetail = new BlogDetail();

if ($_SERVER['REQUEST_METHOD'] === "GET" && isset($_SERVER['REQUEST_METHOD'])) {
    $check = $_GET['check'];
    $id = $_GET['id'];
    $user_id = $account->get_id();
    $content = $_GET['content'];
    if($check == 0 || $check == null){
        $blogDetail->add_comment_videos($user_id,$content,$id);
        header("Location: BlogDetail?id=$id");
    }else{
        $blogDetail->add_comment_podcast($user_id,$content,$id);
        header("Location: PodcastDetail?id=$id");
    }
}
// Kiểm tra hành động được gửi từ yêu cầu AJAX

    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        // Xử lý tăng lượt thích
        if ($action === 'increment_like') {
            // Lấy commentId từ yêu cầu AJAX
            $commentId = $_POST['comment_id'];
            $result_like = $blogDetail->increment_like($commentId);
            // Trả về kết quả dưới dạng JSON
            echo '<i class="far fa-thumbs-up p-1 like like-count">';
            echo  $result_like['like_count'];
        }

        if ($action === 'increment_dislike') {
            // Lấy commentId từ yêu cầu AJAX
            $commentId = $_POST['comment_id'];
            $result_like = $blogDetail->decrement_like($commentId);
            // Trả về kết quả dưới dạng JSON
            echo '<i class="far fa-thumbs-up p-1 like like-count">';
            echo  $result_like['like_count'];
        }

    }
