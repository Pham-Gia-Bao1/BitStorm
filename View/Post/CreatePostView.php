<form action="" method="post">
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
                    <input type="checkbox" name="isAnonymous" value="0">
                    <span class="anonymous-slider"></span>
                </label>
            </div>
      <div class=" avt-name-modal ">
            
                <img src="<?php echo $nameAndImg[1]?>" alt="anh dai dien"   style="border-radius: 50%; width: 40px; height: 40px;" />
                <p class="name-user mb-0 mx-2" id=""><?php echo $nameAndImg[0]?></p>
            </div>  

            <textarea class="content-modal mt-3" name="content" placeholder="Bạn viết gì đi..." oninput="autoResize(this)"></textarea>
        </div>
        <div>
            <hr>
            <button type="submit">Đăng bài viết</button>
        </div>

    </div>
    </div>
</form>