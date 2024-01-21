<form action="" method="post" id="postForm">
    <input type="hidden" name="action" value="createPost">
    <div id="modalPost" class="modal">
        <div class="modal-content" id="model_post">
            <div class="modal-header">
                <h2 class="title">Tạo bài viết</h2>
                <span class="close" id="closePost">&times;</span>
            </div>
            <div class="modal-body">
                <div class=" status-post-user">
                    <div>
                        <p style="margin-bottom: 0;">Đăng ẩn danh</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" id="checkAnonymous" unchecked name="isAnonymous" value="0">
                        <span class="anonymous-slider"></span>
                    </label>
                </div>
                <div class=" avt-name-modal ">

                    <img src="<?php echo $nameAndImg[1] ?>" alt="anh dai dien" style="border-radius: 50%; width: 40px; height: 40px;" />
                    <p class="name-user mb-0 mx-2" id="nameUserCreate"><?php echo $nameAndImg[0] ?></p>
                </div>
                <textarea class="content-modal mt-3" id="contentCreatePost" name="content" placeholder="Hôm nay bạn nghĩ gì?..." oninput="autoResize(this)"></textarea>
            </div>
            <div>
                <hr>
                <button type="submit" id="submitBtn" disabled>Đăng bài viết</button>
            </div>
        </div>
    </div>
</form>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var contentCreatePost = document.getElementById('contentCreatePost');
        var checkAnonymous = document.getElementById('checkAnonymous');
        var nameUserCreate = document.getElementById('nameUserCreate');
        var name = nameUserCreate.textContent;
        var submitBtn = document.getElementById('submitBtn');
        var closePost = document.getElementById('closePost');

        checkAnonymous.addEventListener('change', function() {
            if (checkAnonymous.checked) {
                nameUserCreate.textContent = 'Người dùng ẩn danh';
            } else {
                nameUserCreate.textContent = name;
            }
        });
        contentCreatePost.addEventListener('input', function() {
            submitBtn.disabled = contentCreatePost.value.trim() === '';
            if (!submitBtn.disabled) {
                submitBtn.style.background = 'linear-gradient(to right, #002bff, #87cefa)';
            } else {
                submitBtn.style.background = '#CCCCCC';
            }
        });
        closePost.addEventListener('click', function() {
            if (!submitBtn.disabled) {
                var confirmation = confirm('Bạn có chắc chắn hủy bài post này?');
                if (confirmation) {
                    contentCreatePost.value = '';
                    submitBtn.disabled = contentCreatePost.value.trim() === '';
                    if (submitBtn.disabled) {
                        submitBtn.style.background = '#CCCCCC';
                    }
                    document.getElementById("modalPost").style.display = "none";
                    console.log('Post closed successfully.');
                } else {
                    console.log('Post closure canceled.');
                }
            } else {
                document.getElementById("modalPost").style.display = "none";
            }
        });
        submitBtn.addEventListener('mouseover', function() {
            if (submitBtn.disabled) {
                submitBtn.style.cursor = 'not-allowed';
                submitBtn.style.opacity = '1';
            }
        });
        submitBtn.addEventListener('mouseout', function() {
            submitBtn.style.cursor = 'pointer';
            submitBtn.style.opacity = '1';
        });
        submitBtn.style.background = '#CCCCCC';
    });
</script>