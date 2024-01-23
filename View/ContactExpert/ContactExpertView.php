<?php
include("../View/LayOut/Header/Header.php");
include("../root/CSS/ContactExpert.css.php");
?>
<title>Kết nối chuyên gia</title>
<div class="container-fluid">
    <div class="text-center">
        <img class="top_image mb-3" src="./root/Image/contactExpert/doctors.png" alt="image">
    </div>
    <div class="findDoctor_container p-3 ml-5 mr-5">
        <h3 class="ml-5 fw-bold">Tìm kiếm bác sĩ</h3>
        <form action="ContactExpert" method="get" id="myForm">
            <div class="row">
                <div class="col-sm-9 ml-5">
                    <div class="box_search">
                        <div class="w-100 p-0 form_search">
                            <button class="box_search_icon" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" name="fdoctor" id="doctor" class="input_search" placeholder="Tìm kiếm tên bác sĩ hoặc vấn đề bạn đang gặp phải...">
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 mb-2">
                    <button type="submit" class="fdoctor_button" id="searchDoctor">Search</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row mt-3 card_container">
        <div class="row boxCard " id="boxCard">
            <?php if ($resultOfSearchExperts) : ?>
                <h4 class="mb-3 fw-bold">Chuyên gia dựa theo tìm kiếm của bạn</h4>
                <?php foreach ($resultOfSearchExperts as $expert) : ?>
                    <div class="col-sm-3 mt-4">
                        <div class="card mb-1" style="width: 17rem;">
                            <img class="img_card" src="<?php echo $expert['profile_picture']; ?>" class="card-img-top" alt="image">
                            <div class="card-body text-center">
                                <h5 class="fw-bold"><?php echo $expert['full_name']; ?></h5>
                                <p><?php echo $expert['specialization']; ?></p>
                                <div class="row mb-3">
                                    <span class="time_icon">
                                        <i class="fas fa-clock aclock">
                                            <?php echo " " . date('h A', strtotime($expert['start_time'])) . ' - ' . date('h A', strtotime($expert['end_time'])) ?>
                                        </i>
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 pl-2 ml-3 mt-2 actives" <?php if ($expert['status_calendar'] == 'Ngưng hoạt động') { ?> style="background-color: red;" <?php } ?>></div>
                                    <div class="col-sm-10">
                                        <button class="viewMorebtn" <?php if ($expert['status_calendar'] == 'Ngưng hoạt động' || $expert['status_calendar'] == "pending") { ?> style="background-color: #EEF5FF !important;  cursor: default !important; " <?php } ?>>
                                            <a asp-controller="ContactExpert" asp-action="Details" <?php if ($expert['status_calendar'] == 'Ngưng hoạt động') { ?> href="ContactExpert" <?php } else { ?> href="ContactExpertDetail?id=<?php echo $expert['id'];
                                                                                                                                                                                                                                    }; ?>">
                                                Xem thêm
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php elseif ($isFinding) : ?>
                <div class="text-center mt-2">
                    <h3 class="text-primary text-center mb-5">Không tìm thấy chuyên gia phù hợp dựa theo tìm kiếm của bạn</h3>
                    <img src="https://st.chungta.vn/v303/chungta/images/graphics/404.svg" alt="image">
                </div>
            <?php else : ?>
                <h4 class="mb-3 fw-bold m-4">Những chuyên gia top đầu: </h4>
                <?php $count = 0; ?>
                <div id='box_all_expert'>
                    <?php foreach ($data as $expert) : ?>
                        <div class="card mb-1" style="width: 17rem;">
                            <div class="text-center">
                                <img class="img_card" src="<?php echo $expert['profile_picture']; ?>" class="card-img-top" alt="image">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="fw-bold"><?php echo $expert['full_name']; ?></h5>
                                <p><?php echo $expert['specialization']; ?></p>
                                <div class="row mb-3">
                                    <div class="col time d-flex">
                                        <span class="time_icon">
                                            <i class="fas fa-clock aclock">
                                                <?php echo " " . date('h A', strtotime($expert['start_time'])) . ' - ' . date('h A', strtotime($expert['end_time'])) ?>
                                            </i>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 pl-2 ml-3 mt-2 actives" <?php if ($expert['status_calendar'] == 'Ngưng hoạt động') { ?> style="background-color: red;" <?php } ?>></div>
                                    <div class="col-sm-10">
                                        <button class="viewMorebtn" <?php if ($expert['status_calendar'] == 'Ngưng hoạt động' || $expert['status_calendar'] == "pending") { ?> style="background-color: #EEF5FF !important;  cursor: default !important; " <?php } ?>>
                                            <a asp-controller="ContactExpert" asp-action="Details" <?php if ($expert['status_calendar'] == 'Ngưng hoạt động') { ?> href="ContactExpert" <?php } else { ?> href="ContactExpertDetail?id=<?php echo $expert['id'];
                                                                                                                                                                                                                                    }; ?>">
                                                Xem thêm
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $count++;
                    endforeach; ?>
                </div>
                <div class="row btn-view mt-5">
                    <button class="viewAll text-center" id="viewAll">
                        Xem tất cả
                    </button>
                    <button class="viewAll text-center" id="viewLess" style="display:none">
                        Ẩn bớt
                    </button>
                    <script>
                        document.getElementById('viewAll').addEventListener('click', function() {
                            document.getElementById('box_all_expert').style.height = "auto";
                            document.getElementById("viewAll").style.display = "none";
                            document.getElementById("viewLess").style.display = "block";
                        });
                        document.getElementById('viewLess').addEventListener('click', function() {
                            document.getElementById('box_all_expert').style.height = "505px";
                            document.getElementById("viewAll").style.display = "block";
                            document.getElementById("viewLess").style.display = "none";
                        });
                    </script>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="text-center mt-5">
        <h3 class="comment fw-bold">Một số bình luận của người dùng</h3>
    </div>
    <div class="row mt-5 pl-5 d-flex justify-content-center pr-5">
        <div class="col-md-3">
            <div class="testimonial-card">
                <img src="./root/Image/contactExpert/userimage1.jpg" alt="Client 1" class="img-fluid">
                <p class="client-quote mt-1">Từ khi tôi sử dụng BitStorm và sử dụng trang web này thì tôi
                    thấy cuộc sống tôi đã tốt hơn nhiều so với trước đây. BitStorm thật tuyệt.</p>
                <img src="./root/Image/contactExpert/stars.png" alt="stars">
            </div>
        </div>
        <div class="col-md-3">
            <div class="testimonial-card">
                <img src="./root/Image/contactExpert/userimage.png" alt="Client 1" class="img-fluid">
                <p class="client-quote mt-1">Trước đây tôi không thể mở lòng với bất kì ai, nhưng từ khi được sự tư vấn tâm lý
                    của bác bác sĩ, tôi đã trở nên tự tin hơn
                    rất nhiều.</p>
                <img src="./root/Image/contactExpert/stars.png" alt="stars">
            </div>
        </div>
        <div class="col-md-3">
            <div class="testimonial-card">
                <img src="./root/Image/contactExpert/userimage2.png" alt="Client 1" class="img-fluid">
                <p class="client-quote mt-1">Tôi đã căng thẳng hơn 1 năm rồi nhưng không có ai lắng nghe tôi chia sẻ
                    BitStom luôn đem lại cho tôi những sự bất ngờ.</p>
                <img src="./root/Image/contactExpert/stars.png" alt="stars">
            </div>
        </div>
    </div>
    <div class="row viewNumber mt-5 mb-5">
        <div class="col-sm-4">
            <h2 class="mt-3 number">+3500</h2>
            <p class="text">Người dùng</p>
        </div>
        <div class="col-sm-4">
            <h2 class="mt-3 number">+15</h2>
            <p class="text">Chuyên gia tâm lý hàng đầu</p>
        </div>
        <div class="col-sm-4">
            <h2 class="mt-3 number">+10</h2>
            <p class="text">Cuộc gặp mặt mỗi tháng</p>
        </div>
    </div>
</div>
<?php
include("../View/LayOut/Footer/Footer.php");
?>