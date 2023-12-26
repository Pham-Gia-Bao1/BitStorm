<?php
include("../View/LayOut/Header/Header.php");
include("../root/CSS/BlogDetail.css.php");
?>
<title>Blog</title>

<div class="m-5" id="content">
    <!-- phần 1 -->
    <div id="contain_main_video">
        <div class="video-container">
            <iframe id="video" src="<?= $video[0]['youtube_link']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>

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
            <h3 class="m-0"><?php echo $video[0]['author'] ?></h3>

        </div>
        <!-- <button class="btn btn-primary subsribe align-items-center">SUBSCRIBE</button> -->
    </div>
</div>
<!-- phần 4 -->
<h4 class="m-5 decription_video"><?= $video[0]['description']?></h4>
<h5 class="m-5"><?php echo $video[0]['view'] ?> Lượt xem </h5>
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