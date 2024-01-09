<?php
include("../View/LayOut/Header/Header.php");
include("../root/CSS/NewsDetail.css.php");


if ($news) {
?>
    <div class="p-5"></div>
    <title>Helooo</title>
    <div class="container">
        <div class="p-3"></div>
        <h5><?php echo $news['title'] ?></h5>
        <p><?php echo $news['descriptions'] ?></p>
        <span>
            <p style="font-style: italic;"><?php echo $news['created_at'] ?></p>
        </span>
        <img src="<?php echo $news['image_url'] ?>" alt="ảnh" class="img">
        <div class="p-3"></div>
        <p><?php echo $news['content'] ?></p>
        <p>Xem chi tiết bài viết ở đây <a href="<?php echo $news['link']; ?>"><?php echo $news['link']; ?></a></p>
        <div class="p-3"></div>
        <h6><b>Gợi Ý Dành Cho Bạn</b></h6>
        <div class="container">
            <?php foreach ($reconmmentNewsDetails as $n ):?>
            <div class="row d-flex">
                <div class="col-sm-6">
                <div class="mask-group-parent">
                    <img class="mask-group-icon" alt="ảnh" src="<?php echo $n['image_url']?>">
                  <p> <b class="danh-sch-10"><?php echo $n['title'] ?></b></p> 
                    <div class="tr-nh-c"><?php echo $n['descriptions'] ?></div>
                </div>
                </div>
            </div>
            <div class="p-2"></div>
            <?php endforeach ?>
        </div>
    </div>
<?php
} else {
    echo "Không tìm thấy tin tức";
}

include("../View/LayOut/Footer/Footer.php");
?>