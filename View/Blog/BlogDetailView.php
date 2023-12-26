<?php
include("../View/LayOut/Header/Header.php");

?>
<title>Blog</title>

<style>
    #content {
        padding-top: 30px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .subsribe {
        margin-left: 50px;
        height: 40px;
        margin-top: 10px;
    }

    h4 {
        margin-top: 30px !important;
        margin-bottom: 30px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .tỉme {
        margin-left: 10px;
    }

    .star {
        color: gold;
    }

    .like,
    .didlike {
        color: black;
        transition: color 0.3s;
    }

    .like:hover,
    .didlike:hover {
        color: blue;
        cursor: pointer;
    }

    .like {
        color: blue;
        /* Thêm các hiệu ứng hoặc chuyển động khác tại đây */
    }

    .didlike {
        color: red;
        /* Thêm các hiệu ứng hoặc chuyển động khác tại đây */
    }

    .avatar_comment {
        width: 50px;
        object-fit: cover;
    }

    .card {
        border: 1px solid rgba(174, 174, 174, 0.099) !important;
    }
    .name h2 {
        width: 90vw;
        height: auto;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-left: 30px;
    }

    .view {
        font-weight: bold;
    }

    #option_of_video {

        padding: 10px;
        padding-right: 30px;
        padding-left: 30px;
    }
    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        font-size: 40px;
        color: white;
        cursor: pointer;
        background-color: rgb(112, 112, 255);
        padding: 10px;
        border-radius: 50%;
        outline: 20px solid rgba(144, 144, 231, 0.482);
    }

    .video-container {

        display: inline-block;
        /* position: relative; */
        width: 90vw;
        left: -30px;
        margin: 0 auto;
        border-radius: 8px;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;


    }

    .play-button {
        outline: 2px solid rgba(255, 255, 255, 0.5) !important;
        /* color: black; */
    }

    .play-button,
    .pause-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 3rem;
        color: white;
        cursor: pointer;
        transition: outline .3s ease-in-out;
        margin-top: 150px;

        /* left: 45vw; */
    }

    .play-button:hover {
        outline: 30px solid rgba(255, 255, 255, 0.5) !important;
        background-color: rgb(0, 0, 253);
    }

    .pause-icon {
        display: none;
    }
    .sub_title h6{
        width: 100%;
          -webkit-line-clamb : 5;
         -webkit-box-orient: vertical;
         overflow: hidden;
    }

    .sub_title span {
        color: #000;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 19px;
        /* 158.333% */
        width: 75px;
    }

    .sub_title span:last-child {
        color: #000;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 19px;
        /* 158.333% */
        display: block !important;
        width: 75px;


    }

    #content_video {
        width: 20vw !important;
        padding: 20px !important;
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;
    }

    #content_video:hover {
        transform: scale(1.05);
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    h6 {
        font-size: 15px;
    }

    .container-fluid .card {
        /* background-color: rgb(163, 163, 163); */
        border: 0 solid !important;
        cursor: pointer;
        transition: box-shadow 0.3s, transform 0.3s;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }

    .container-fluid .card:hover {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        transform: scale(1.04);
    }

    input {
        width: 87vw !important;
    }

    #comment-list {
        /* background-color: rgba(128, 128, 128, 0.208); */
        padding: 10px;
        border-radius: 8px;
    }

    .list_product {
        margin-top: 50px;
        width: 100vw !important;
        padding-bottom: 50px;
    }

    .offical {
        padding-left: 30px;
    }

    #video {
        width: 100vw;
        height: 800px;
        margin-bottom: 30px;
        border-radius: 8px !important;
    }
    .decription_video{
         /* -webkit-line-clamb : 5;
         -webkit-box-orient: vertical;
         overflow: hidden; */
    }
</style>
<div class="m-5" id="content">
    <!-- phần 1 -->
    <div id="contain_main_video">
        <div class="video-container">
            <iframe id="video" src="<?= $video[0]['youtube_link']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    <!-- <script>
        var video = document.getElementById('video');
        var playButton = document.querySelector('.play-button');
        var pauseIcon = document.querySelector('.pause-icon');
        var timeoutId;
        playButton.addEventListener('click', function() {
            if (video.paused) {
                video.play();
                playButton.style.display = 'none';
                pauseIcon.style.display = 'inline-block';
                playButton.style.outline = 'none';

                clearTimeout(timeoutId);
                timeoutId = setTimeout(function() {
                    pauseIcon.style.display = 'none';
                }, 2000);
            } else {
                video.pause();
            }
        });

        pauseIcon.addEventListener('click', function() {
            video.pause();
        });

        video.addEventListener('pause', function() {
            playButton.style.display = 'inline-block';
            pauseIcon.style.display = 'none';
        });
    </script>
 -->
    <div class="name">
        <h2 class="text-primary"><?= $video[0]['title']?></h2>
    </div>
    <!-- phần 2 -->

    <div class="d-flex justify-content-between align-items-center my-5" id="option_of_video">
        <div class="text-muted d-flex gap-3">
            <p class="view bg-light p-2">132,757 views</p>
            <p class="view bg-light p-2">22 hours ago</p>
        </div>
        <div class="d-flex justify-content-between align-items-center gap-3">
            <p class="btn btn-light"><i class="far fa-thumbs-up"></i> 21K</p>
            <p class="btn btn-light"><i class="far fa-thumbs-down"></i> DISLIKE</p>
            <p class="btn btn-light"><i class="fas fa-share"></i> SHARE</p>
            <p class="btn btn-light"><i class="fas fa-download"></i> DOWNLOAD</p>
            <p class="btn btn-light"><i class="far fa-copy"></i> CLIP</p>
            <p class="btn btn-light"><i class="far fa-save"></i> SAVE</p>
        </div>
    </div>
</div>
<!-- phần 3 -->

<div class="d-flex justify-content-between align-items-center my-3 offical">
    <div class="d-flex m-3">
        <img src="https://www.drivelah.sg/static/media/avatar4.a80a5d55.jpeg" alt="" class="rounded-circle" width=50 height=50>
        <div class="ms-3 gap-5 align-items-center">
            <h3 class="m-0">FC Barcelona</h3>
            <span>14.1M Subscriber</span>
        </div>
        <!-- <button class="btn btn-primary subsribe align-items-center">SUBSCRIBE</button> -->
    </div>
</div>
<!-- phần 4 -->
<h4 class="m-5 decription_video"><?= $video[0]['description']?></h4>
<h5 class="m-5">16,000 Comments</h5>
<!-- phần 5 -->

<div class="comment-list my-3 m-3 bg-light" id="comment-list">
    <div class="card mb-3">
        <div class="card-body  border-white">
            <div class="d-flex align-items-start  border-white">
                <img class="rounded-circle me-3 avatar_comment" src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="Profile Picture" width=50 height=50>
                <div>
                    <div class="d-flex align-items-center">
                        <input type="text" class="form-control custom-input m-2 input" placeholder="Add a comment">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body  border-white">
            <div class="d-flex align-items-start  border-white">
                <img class="rounded-circle me-3 avatar_comment" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fHww" alt="Profile Picture" width=50 height=50>
                <div>
                    <div class="d-flex align-items-center">
                        <h5 class="me-3 mb-0">John Doe</h5>
                        <div class="comment-rating">
                            <span class="rating star">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                        </div>
                        <p class="me-3 mb-0 tỉme">3 days ago</p>

                    </div>



                    <p class="mb-2">This product is amazing! I love the taste and texture.</p>

                    <div class="comment-actions d-flex">
                        <button class="btn btn-light me-3">
                            <i class="far fa-thumbs-up p-1 like"></i>232
                        </button>
                        <button class="btn btn-light">
                            <i class="far fa-thumbs-down p-1 didlike"></i> Dislike
                        </button>

                    </div>

                    <div class="d-flex gap-2 p-2 align-content-center">
                        <i class="fa-solid fa-chevron-down text-primary"></i>
                        <p class="text-primary">15 REPLIES</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex align-items-start">
                <img class="rounded-circle me-3 avatar_comment" src="https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699574400&semt=sph" alt="Profile Picture" width=50 height=50>
                <div>
                    <div class="d-flex align-items-center">
                        <h5 class="me-3 mb-0">Jane Smith</h5>
                        <div class="comment-rating">
                            <span class="rating star">&#9733;&#9733;&#9734;&#9734;&#9734;</span>
                        </div>
                        <p class="me-3 mb-0 tỉme">3 days ago</p>

                    </div>

                    <p class="mb-2">I'm not impressed with this product. It didn't meet my expectations.</p>

                    <div class="comment-actions d-flex">
                        <button class="btn btn-light me-3">
                            <i class="far fa-thumbs-up p-1 like"></i>232
                        </button>
                        <button class="btn btn-light">
                            <i class="far fa-thumbs-down p-1 didlike"></i> Dislike
                        </button>
                    </div>

                    <div class="d-flex gap-2 p-2 align-content-center">
                        <i class="fa-solid fa-chevron-down text-primary"></i>
                        <p class="text-primary">15 REPLIES</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex align-items-start">
                <img class="rounded-circle me-3 avatar_comment" src="https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699574400&semt=sph" alt="Profile Picture" width=50 height=50>
                <div>
                    <div class="d-flex align-items-center">
                        <h5 class="me-3 mb-0">Jane Smith</h5>
                        <div class="comment-rating">
                            <span class="rating star">&#9733;&#9733;&#9734;&#9734;&#9734;</span>
                        </div>
                        <p class="me-3 mb-0 time">3 days ago</p>

                    </div>

                    <p class="mb-2">I'm not impressed with this product. It didn't meet my expectations.</p>

                    <div class="comment-actions d-flex">
                        <button class="btn btn-light me-3">
                            <i class="far fa-thumbs-up p-1 like"></i>232
                        </button>
                        <button class="btn btn-light">
                            <i class="far fa-thumbs-down p-1 didlike"></i> Dislike
                        </button>
                    </div>

                    <div class="d-flex gap-2 p-2 align-content-center">
                        <i class="fa-solid fa-chevron-down text-primary"></i>
                        <p class="text-primary">15 REPLIES</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="border-0 p-2 rounded-3">
        View more
        <i class="fa-solid fa-chevron-down text-primary"></i>

    </button>
</div>
<script>
    var likeButton = document.querySelector('.like');
    var dislikeButton = document.querySelector('.dislike');

    likeButton.addEventListener('click', toggleLike);
    dislikeButton.addEventListener('click', toggleDislike);

    function toggleLike() {
        likeButton.classList.toggle('liked');
    }

    function toggleDislike() {
        dislikeButton.classList.toggle('disliked');
    }
</script>

<!-- phần 6 -->
<div class="d-flex gap-4 flex-wrap justify-content-center list_product">
    <div class="card content_video" id="content_video">
                      <iframe src="<?= $product['youtube_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center my-3">
                <div class="d-flex gap-1">
                    <img src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="" class="rounded-circle" width=50 height=50>
                    <div class="ms-3 gap-5 align-items-center sub_title">
                        <h6 class="m-0">How to build a loyal community online and offline</h6>
                        <span class="d-inline">FC Barcelona</span>
                        <span class="d-inline"><i class="fa-solid fa-circle-check"></i></span>
                        <span class="d-inline-block w-100">14.1M Subscriber</span>
                        <span class="d-inline-block w-100">22 hours ago</span>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="card content_video" id="content_video">
                      <iframe src="<?= $product['youtube_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center my-3">
                <div class="d-flex gap-1">
                    <img src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="" class="rounded-circle" width=50 height=50>
                    <div class="ms-3 gap-5 align-items-center sub_title">
                        <h6 class="m-0">How to build a loyal community online and offline</h6>
                        <span class="d-inline">FC Barcelona</span>
                        <span class="d-inline"><i class="fa-solid fa-circle-check"></i></span>
                        <span class="d-inline-block w-100">14.1M Subscriber</span>
                        <span class="d-inline-block w-100">22 hours ago</span>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="card content_video" id="content_video">
                      <iframe src="<?= $product['youtube_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center my-3">
                <div class="d-flex gap-1">
                    <img src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="" class="rounded-circle" width=50 height=50>
                    <div class="ms-3 gap-5 align-items-center sub_title">
                        <h6 class="m-0">How to build a loyal community online and offline</h6>
                        <span class="d-inline">FC Barcelona</span>
                        <span class="d-inline"><i class="fa-solid fa-circle-check"></i></span>
                        <span class="d-inline-block w-100">14.1M Subscriber</span>
                        <span class="d-inline-block w-100">22 hours ago</span>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="card content_video" id="content_video">
                      <iframe src="<?= $product['youtube_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center my-3">
                <div class="d-flex gap-1">
                    <img src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="" class="rounded-circle" width=50 height=50>
                    <div class="ms-3 gap-5 align-items-center sub_title">
                        <h6 class="m-0">How to build a loyal community online and offline</h6>
                        <span class="d-inline">FC Barcelona</span>
                        <span class="d-inline"><i class="fa-solid fa-circle-check"></i></span>
                        <span class="d-inline-block w-100">14.1M Subscriber</span>
                        <span class="d-inline-block w-100">22 hours ago</span>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="card content_video" id="content_video">
                      <iframe src="<?= $product['youtube_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center my-3">
                <div class="d-flex gap-1">
                    <img src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="" class="rounded-circle" width=50 height=50>
                    <div class="ms-3 gap-5 align-items-center sub_title">
                        <h6 class="m-0">How to build a loyal community online and offline</h6>
                        <span class="d-inline">FC Barcelona</span>
                        <span class="d-inline"><i class="fa-solid fa-circle-check"></i></span>
                        <span class="d-inline-block w-100">14.1M Subscriber</span>
                        <span class="d-inline-block w-100">22 hours ago</span>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="card content_video" id="content_video">
                      <iframe src="<?= $video[0]['youtube_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center my-3">
                <div class="d-flex gap-1">
                    <img src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="" class="rounded-circle" width=50 height=50>
                    <div class="ms-3 gap-5 align-items-center sub_title">
                        <h6 class="m-0"> <?= $video[0]['description']?></h6>
                        <span class="d-inline">FC Barcelona</span>
                        <span class="d-inline"><i class="fa-solid fa-circle-check"></i></span>
                        <span class="d-inline-block w-100">14.1M Subscriber</span>
                        <span class="d-inline-block w-100">22 hours ago</span>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="card content_video" id="content_video">
                      <iframe src="<?= $product['youtube_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center my-3">
                <div class="d-flex gap-1">
                    <img src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="" class="rounded-circle" width=50 height=50>
                    <div class="ms-3 gap-5 align-items-center sub_title">
                        <h6 class="m-0">How to build a loyal community online and offline</h6>
                        <span class="d-inline">FC Barcelona</span>
                        <span class="d-inline"><i class="fa-solid fa-circle-check"></i></span>
                        <span class="d-inline-block w-100">14.1M Subscriber</span>
                        <span class="d-inline-block w-100">22 hours ago</span>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="card content_video" id="content_video">
                      <iframe src="<?= $product['youtube_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center my-3">
                <div class="d-flex gap-1">
                    <img src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="" class="rounded-circle" width=50 height=50>
                    <div class="ms-3 gap-5 align-items-center sub_title">
                        <h6 class="m-0">How to build a loyal community online and offline</h6>
                        <span class="d-inline">FC Barcelona</span>
                        <span class="d-inline"><i class="fa-solid fa-circle-check"></i></span>
                        <span class="d-inline-block w-100">14.1M Subscriber</span>
                        <span class="d-inline-block w-100">22 hours ago</span>

                    </div>
                </div>

            </div>

        </div>

    </div>


</div>
<?php
include("../View/LayOut/Footer/Footer.php");
?>