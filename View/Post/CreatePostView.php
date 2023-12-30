<div id="modalPost" class="modal">
    <div class="modal-content" id="model_post">
        <div class="modal-header">
            <h2 class="title">Tạo bài viết</h2>
            <span class="close" onclick="closeModal()">&times;</span>
        </div>
        <div class="modal-body">
            <div class=" status-post-user">
                <div><p style="margin-bottom: 0;">Đăng ẩn danh</p></div>
                <label class="switch">
                    <input type="checkbox">
                    <span class="anonymous-slider"></span>
                </label>
            </div>
      <div class=" avt-name-modal ">
                <img src="https://tse3.mm.bing.net/th?id=OIP.ixZ69lPCOZ3ZO5UqSHQGIAHaHa&pid=Api&P=0&h=220" alt="anh dai dien"   style="border-radius: 50%; width: 40px; height: 40px;" />
                <p class="name-user mb-0" id=""><?php   
                $cookie_name = "User";
                if (isset($_COOKIE[$cookie_name])) {
                    $account = new Account();
                    $nameAndImg = $account->get_name_and_img_user();
                    $name = $nameAndImg[0];
                    echo $name;
                }
                ?></p>
            </div>  


            <textarea class="content-modal mt-3" placeholder="Bạn viết gì đi..." oninput="autoResize(this)"></textarea>
        </div>
        <div>
            <hr>
            <button type="button" onclick="CreatePost(event)">Đăng bài viết</button>
        </div>

    </div>
</div>