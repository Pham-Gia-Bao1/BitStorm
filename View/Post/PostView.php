<?php
include("../View/LayOut/Header/Header.php");
?>
<title>Post</title>
<?php
include("../root/CSS/Post.css.php");

?>
</style>
<div class="container-fluid">
    <div class="row card-post">
        <div class="row post-bar box_search">
            <div class="col-1">
                <!--  -->
                <img src="<?php echo $nameAndImg[1]?>" alt="anh dai dien" id="img" class="w-100" style="border-radius: 50%; height:70px" />
            </div>
            <div class="col search">
                <input type="text" class="search__input" readonly placeholder="Hôm nay, cậu ổn không?" onclick="openModal()">
            </div>
        </div>

        <?php

        foreach($posts as $post):
            if ($post['isAnonymous']){
                $name=$post['name'];
                $img = $post['img'];
            }else{
                $name="Người dùng ẩn danh";
                $img = "https://cdn-icons-png.flaticon.com/512/3177/3177440.png";
            };
        ?>

        <div class="post">

            <div class="post-row1">
                    <div class="post-avt me-3">
                        <img src="<?php echo $img?>" alt="anh dai dien" id="img" style="border-radius: 50%; width: 40px; height: 40px;" />
                    </div>
                    <div class="post-name">
                        <p class="name-user"><?php echo $name?></p>
                        <p class="hours-posted"><?php echo $post['timeElapsed']?></p>
                    </div>
            </div>
            <div class="content-post">
                <p>
                <?php echo $post['content']?>
                </p>
            </div>
            <div class="emotion">
                <div class="con-like">
                    <input class="like" type="checkbox" title="like" name="">
                    <div class="checkmark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="outline" viewBox="0 0 24 24">
                            <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="filled" viewBox="0 0 24 24">
                            <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" class="celebrate">
                            <polygon class="poly" points="10,10 20,20"></polygon>
                            <polygon class="poly" points="10,50 20,50"></polygon>
                            <polygon class="poly" points="20,80 30,70"></polygon>
                            <polygon class="poly" points="90,10 80,20"></polygon>
                            <polygon class="poly" points="90,50 80,50"></polygon>
                            <polygon class="poly" points="80,80 70,70"></polygon>
                        </svg>
                    </div>
                </div>
                <i class="far fa-comment icon_comment"></i>
            </div>
            <!-- lượt tym -->
            <div>
                <p style="margin-bottom: 0;"><span style="font-weight: 500; margin-bottom: 0;"><?php echo $post['like_count']?></span> lượt thích</p>

            </div>
            <!--add cmt  -->
            <?php
            $comments=$post['comment'];
            if (!empty($comments)):
            ?>
                <?php foreach ($comments as $comment):?>
                <div class="post-comment m-2">

                    <div class="post-content-comment">

                        <p class="name-post"><?php echo $comment['author']?></p>
                        <p class="content"><?php echo $comment['content']?></p>

                    </div>
                </div>
                <?php endforeach;?>
            <?php
            endif;?>
            <!-- end -->
            <div class="input-add-comment" >
                <input type="hidden" name="comment_id" value="<?php echo $post['id']?>">
              <input placeholder="" class="input-field input_comment" type="text">
              <label for="input-field" class="input-label">Bình luận</label>
              <span class="input-highlight"></span>
            </div>

        </div>
        <?php endforeach;?>
    </div>
</div>





<?php
    include("CreatePostView.php");
    include("../root/JS/Post.js.php");
?>


<?php

include("../View/LayOut/Footer/Footer.php");

?>