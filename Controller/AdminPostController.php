<?php
    include('../Model/AdminPostModel.php');
    include('../Model/PostModel.php');
    // include('../View/Admin/Post/PostAdminView.php');
    $PostAdmin=new AdminPosts();
    $Post=new Post();
   
    $posts=$PostAdmin->getAllPost();
    $users=$PostAdmin->getAllUser();
    
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'createPostAdmin':
                
                if(!empty($_POST['createUserIdPost'])&& isset($_POST['createLikeCountPost'])&& !empty($_POST['createContentPost'])&& isset($_POST['createIsAnonyMousPost'])){
                   
                    $likeCount=htmlspecialchars(trim($_POST['createLikeCountPost']));
                    $content=htmlspecialchars(trim($_POST['createContentPost']));
                    $createPost=[
                        "userid" => $_POST['createUserIdPost'],
                        "isAnonymous"=>$_POST['createIsAnonyMousPost'],
                        "likeCount"=> $likeCount,
                        "content" => $content,
                    ];
                    $createPost = $Post->CreatePost($createPost);
                    Header("Location: AdminPost");
                }else{
                    echo "<script>alert('create thất bại')</script>";
                }
                // Xử lý logic tạo mới
                // echo json_encode(['message' => 'Create method called']);
                break;
            case 'updatePostAdmin':
                if(!empty($_POST['updateIdPost'])&& !empty($_POST['updateUserIdPost'])&& isset($_POST['updateLikeCountPost'])&& !empty($_POST['updateContentPost'])&& isset($_POST['updateIsAnonyMousPost'])){
                    $likeCount=htmlspecialchars(trim($_POST['updateLikeCountPost']));
                    $content=htmlspecialchars(trim($_POST['updateContentPost']));
                    $updatePost=[
                        "id"=>$_POST['updateIdPost'],
                        "userid" => $_POST['updateUserIdPost'],
                        "isAnonymous"=>$_POST['updateIsAnonyMousPost'],
                        "likeCount"=> $likeCount,
                        "content" => $content,
                    ];
                    $PostAdmin->UpdatePost($updatePost);
                    Header("Location: AdminPost");
                }
                break;
            case 'delete':
                // Xử lý logic cập nhật
                // echo json_encode(['message' => 'Update method called']);
                break;
            default:
                // Xử lý mặc định hoặc báo lỗi
                echo json_encode(['error' => 'Invalid action']);
                break;
        }
    } else {
        // Xử lý khi không có trường action trong request
        echo json_encode(['error' => 'Action not specified']);
    }
} 
?>
<?php include('../View/Admin/Post/PostAdminView.php');?>