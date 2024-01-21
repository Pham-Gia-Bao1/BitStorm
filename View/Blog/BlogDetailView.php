<?php
include("../View/LayOut/Header/Header.php");
include("../root/CSS/BlogDetail.css.php");
?>
<title>Blog</title>
<main id="main">
    <div class="m-5" id="content">
        <div id="contain_main_video">
            <div class="video-container">
                <iframe id="video" src="<?= htmlspecialchars($video[0]['youtube_link']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="name">
            <h2 class="text-primary"><?= htmlspecialchars($video[0]['title']) ?></h2>
        </div>
        <div class="d-flex justify-content-between align-items-center my-5" id="option_of_video">
            <div class="text-muted d-flex gap-3">
                <p class="view bg-light p-2"><?php echo htmlspecialchars($video[0]['view']) ?> views</p>
            </div>
            <div class="d-flex justify-content-between align-items-center gap-3">
                <p class="btn btn-light"><i class="far fa-thumbs-up"></i> <?php echo htmlspecialchars($video[0]['like_count']) ?></p>
                <p class="btn btn-light"><i class="far fa-thumbs-down"></i><?php echo htmlspecialchars($video[0]['dislike_count']) ?></p>
                <p class="btn btn-light" data-toggle="modal" data-target="#videoModal"><i class="fas fa-share"></i> Chia sẻ</p>
                <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="videoModalLabel">Link video</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body gap-3">
                                <div class="d-flex gap-2 m-4">
                                    <input type="text" class="form-control w-100" id="videoLinkInput" readonly value="<?php echo htmlspecialchars($video[0]['youtube_link']) ?>">
                                    <button class="btn-primary" onclick="copyLink()">Copy</button>
                                </div>
                                <script>
                                    function copyLink() {
                                        var linkInput = document.getElementById("videoLinkInput");
                                        linkInput.select();
                                        document.execCommand("copy");
                                        alert("Đã sao chép liên kết: " + linkInput.value);
                                    }
                                </script>
                                <div class="share-buttons gap-2 m-4">
                                    <a href="mailto:?subject=Chia sẻ video&body=Đây là link video: <?php echo htmlspecialchars($video[0]['youtube_link']) ?>" class="btn btn-primary"><i class="fas fa-envelope"></i> Email</a>
                                    <a href="https://zalo.me/?text=<?php echo urlencode($video[0]['youtube_link']) ?>" class="btn btn-primary"><i class="fab fa-zalo"></i> Zalo</a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($video[0]['youtube_link']) ?>" class="btn btn-primary"><i class="fab fa-facebook"></i> Facebook</a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="btn btn-light" id="downloadBtn"><i class="fas fa-download"></i> Tải xuống</p>
                <p class="btn btn-light"><i class="far fa-save"></i> Lưu </p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between align-items-center my-3 offical">
        <div class="d-flex m-3">
            <img src="<?= $author[0]['img_profile'] ?>" alt="" class="rounded-circle" width=50 height=50>
            <div class="ms-3 gap-5 align-items-center">
                <h3 class="m-0"><?php echo $author[0]['name'] ?></h3>
            </div>
        </div>
    </div>
    <h4 class="m-5 decription_video"><?= htmlspecialchars($video[0]['description']) ?></h4>
    <h5 class="m-5"><?php echo htmlspecialchars($video[0]['view']) ?> Lượt xem </h5>
    <div class="comment-list my-3 m-3 bg-light" id="comment-list">
        <div class="card mb-3">
            <div class="card-body border-white">
                <?php $path = $_SERVER['REQUEST_URI'];
                $parts = parse_url($path); // Phân tích URL thành các thành phần
                $path = $parts['path']; // Lấy phần đường dẫn từ URL
                $filename = basename($path); // Lấy tên file cuối cùng từ đường dẫn
                if ($filename == "PodcastDetail") {
                    $check_video = true;
                } else {
                    $check_video = false;
                }
                ?>
                <form id="commentForm" method="get" action="comment" class="d-flex align-items-start border-white justify-content-between" onsubmit="validateForm()">
                    <img class="rounded-circle me-3 avatar_comment" src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="Profile Picture" width="50" height="50">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($video[0]['id']) ?>">
                    <input type="hidden" name="check" value="<?php echo $check_video ?>">
                    <input type="text" id="commentInput" class="form-control custom-input m-2 input" required placeholder="Thêm bình luận" name="content">
                    <button type="submit" class="btn-primary add_comment">Thêm Bình luận</button>
                </form>
                <script>
                    function validateForm() {
                        var userCookie = '<?php echo isset($_COOKIE["User"]) ? "true" : "false"; ?>';
                        if (userCookie === "false") {
                            alert("Bạn chưa đăng nhập");
                            return false; // Ngăn người dùng gửi form nếu chưa đăng nhập
                        }
                        return true; // Cho phép gửi form nếu đã đăng nhập
                    }
                </script>
            </div>
        </div>
        <?php foreach ($comments as $comment) {
        ?>
            <div class="card mb-3">
                <div class="card-body  border-white">
                    <div class="d-flex align-items-start  border-white comment_item">
                        <?php include_once("../Model/AccountModel.php");
                        $account = new Account();
                        $name_and_img = $account->get_name_and_img_user_by_id($comment['user_id']); ?>
                        <img class="rounded-circle me-3 avatar_comment" src="<?php echo $name_and_img[1] ?>" alt="Profile Picture" width=50 height=50>
                        <div>
                            <div class="d-flex align-items-center">
                                <h5 class="me-3 mb-0"><?php echo $name_and_img[0] ?></h5>
                                <div class="comment-rating">
                                    <span class="rating star">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                                </div>
                                <p class="me-3 mb-0 tỉme"><?php echo $comment['created_at'] ?></p>
                            </div>
                            <p class="mb-2"><?php echo $comment['content'] ?></p>
                            <div class="comment-actions d-flex">
                                <button class="btn btn-light me-3 like-count" onclick="increaseLikeCount(<?php echo $comment['id']; ?>)">
                                    <i class="far fa-thumbs-up p-1 like like-count"></i><?php echo $comment['like_count']; ?>
                                </button>
                                <button class="btn btn-light" onclick="increaseDislikeCount(<?php echo $comment['id']; ?>)">
                                    <i class="far fa-thumbs-down p-1 didlike"></i> <?php echo $comment['dislike_count']; ?>
                                </button>
                            </div>
                        </div>
                        <script>
                            function increaseLikeCount(commentId) {
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "Comment", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        console.log(xhr.responseText);
                                        var likeCountElement = document.querySelector('.like-count');
                                        likeCountElement.innerHTML = xhr.responseText;
                                    }
                                };
                                console.log(data)
                                var data = "action=increment_like&comment_id=" + commentId;
                                xhr.send(data);
                            }
                            function increaseDislikeCount(commentId) {
                                var xhr = new XMLHttpRequest();
                                xhr.open("POST", "Comment", true);
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        console.log(xhr.responseText);
                                        var dislikeCountElement = document.querySelector('.didlike');
                                        dislikeCountElement.innerHTML = xhr.responseText;
                                    }
                                };
                                var data = "action=increment_dislike&comment_id=" + commentId;
                                xhr.send(data);
                            }
                        </script>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <button class="border-0 p-2 rounded-3 view_more" id="view_more">
        Xem thêm
        <i class="fa-solid fa-chevron-down text-primary"></i>
    </button>
    <button class="border-0 p-2 rounded-3 view_more" id="view_lest">
        Ẩn
        <i class="fa-solid fa-chevron-up text-primary"></i>
    </button>
    <?php include_once('../root/JS/BlogDetail.js.php') ?>
    <div class="d-flex gap-4 flex-wrap justify-content-center list_product">
        <?php foreach ($data['products'] as $product) { ?>
            <a href="<?php if ($check) {
                            echo 'PodcastDetail';
                        } else {
                            echo "BlogDetail";
                        } ?>?id=<?= $product['id'] ?>">
                <div class="card content_video" id="content_video">
                    <iframe class="rounded" src="<?= $product['youtube_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="d-flex justify-content-end align-items-end  card_box_2">
                        <button class="btn btn-primary rounded-pill button_view w-25">Xem</button>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
</main>
<?php
include("../View/LayOut/Footer/Footer.php");
?>