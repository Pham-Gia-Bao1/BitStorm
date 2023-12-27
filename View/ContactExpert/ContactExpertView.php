<?php
include("../View/LayOut/Header/Header.php");
?>

<title>Kết nối chuyên gia</title>
<?php
include("../root/CSS/ContactExpert.css.php");
?>
<div class="container-fluid mt-5">
    <div>
        <img class="top_image mb-5" src="./root/Image/contactExpert/doctors.png" alt="image">
    </div>
    <div class="findDoctor_container p-3 ml-5 mr-5">
        <h3 class="ml-5 fw-bold">Find a doctor</h3>
        <div class="row">
            <div class="col-sm-9 ml-5">
                <form action="" method="">
                    <input type="text" class="form-control" name="fdoctor" id="fdoctor" value="" placeholder="Tên bác sĩ hoặc vấn đề bạn đang gặp phải...">
                </form>
            </div>
            <div class="col-sm-2 mb-2">
                <button type="submit" class="fdoctor_button">Search</button>
            </div>
        </div>
    </div>
    <div class="row mt-5 card_container">
        <h4 class="mb-3 fw-bold">Những chuyên gia top đầu</h4>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="./root/Image/contactExpert/doctor.jpg" class="card-img-top" alt="image">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Th.sĩ Nguyễn Trung Nghĩa</h5>
                    <p>Chuyên viên tâm lý</p>
                    <div class="row mb-3">
                        <div class="col time d-flex">
                            <span class="time_icon">
                                <i class="fas fa-clock aclock"></i>
                            </span>
                            <p class="fw-bold mt-3 ml-1">3PM - 5PM</p>
                        </div>
                        <div class="col fee">
                            <p class="fw-bold mt-1">100000 VND</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 pl-2 ml-3 mt-2 actives"></div>
                        <div class="col-sm-10">
                            <button class="viewMorebtn">
                                <a asp-controller="ContactExpert" asp-action="Details" href="ContactExpertDetail">
                                    Xem thêm
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="./root/Image/contactExpert/doctor.jpg" class="card-img-top" alt="image">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Th.sĩ Nguyễn Trung Nghĩa</h5>
                    <p>Chuyên viên tâm lý</p>
                    <div class="row mb-3">
                        <div class="col time d-flex">
                            <span class="time_icon">
                                <i class="fas fa-clock aclock"></i>
                            </span>
                            <p class="fw-bold mt-3 ml-1">3PM - 5PM</p>
                        </div>
                        <div class="col fee">
                            <p class="fw-bold mt-1">100000 VND</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 pl-2 ml-3 mt-2 actives"></div>
                        <div class="col-sm-10">
                            <button class="viewMorebtn">
                                <a asp-controller="ContactExpert" asp-action="Details" href="ContactExpertDetail">
                                    Xem thêm
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="./root/Image/contactExpert/doctor.jpg" class="card-img-top" alt="image">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Th.sĩ Nguyễn Trung Nghĩa</h5>
                    <p>Chuyên viên tâm lý</p>
                    <div class="row mb-3">
                        <div class="col time d-flex">
                            <span class="time_icon">
                                <i class="fas fa-clock aclock"></i>
                            </span>
                            <p class="fw-bold mt-3 ml-1">3PM - 5PM</p>
                        </div>
                        <div class="col fee">
                            <p class="fw-bold mt-1">100000 VND</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 pl-2 ml-3 mt-2 actives"></div>
                        <div class="col-sm-10">
                            <button class="viewMorebtn">
                                <a asp-controller="ContactExpert" asp-action="Details" href="ContactExpertDetail">
                                    Xem thêm
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="./root/Image/contactExpert/doctor.jpg" class="card-img-top" alt="image">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Th.sĩ Nguyễn Trung Nghĩa</h5>
                    <p>Chuyên viên tâm lý</p>
                    <div class="row mb-3">
                        <div class="col time d-flex">
                            <span class="time_icon">
                                <i class="fas fa-clock aclock"></i>
                            </span>
                            <p class="fw-bold mt-3 ml-1">3PM - 5PM</p>
                        </div>
                        <div class="col fee">
                            <p class="fw-bold mt-1">100000 VND</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 pl-2 ml-3 mt-2 actives"></div>
                        <div class="col-sm-10">
                            <button class="viewMorebtn">
                                <a asp-controller="ContactExpert" asp-action="Details" href="ContactExpertDetail">
                                    Xem thêm
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row btn-view mt-5">
        <div class="viewAll text-center">
            Xem tất cả
        </div>
    </div>
    <div class="text-center mt-5">
        <h2 class="comment fw-bold">Bình luận của các khách hàng</h2>
        <p>Trải nghiệm người dùng luôn được chúng tôi ưu tiên hàng đầu. <br>
            Việc mang lại trải nghiệm tốt giúp họ vượt qua giai đoạn căng thẳng là sứ mệnh của chúng tôi.
        </p>
    </div>
    <div class="row mt-5 pl-5 pr-5">
        <div class="col-md-4">
            <div class="testimonial-card">
                <img src="./root/Image/contactExpert/userimage1.jpg" alt="Client 1" class="img-fluid">
                <p class="client-quote mt-1">Từ khi tôi sử dụng BitStorm và sử dụng trang web này thì tôi
                    thấy cuộc sống tôi đã tốt hơn nhiều so với trước đây. BitStorm thật tuyệt vời</p>
                <img src="./root/Image/contactExpert/stars.png" alt="stars">
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonial-card">
                <img src="./root/Image/contactExpert/userimage.png" alt="Client 1" class="img-fluid">
                <p class="client-quote mt-1">Trước đây tôi không thể mở lòng với bất kì ai, nhưng từ khi được sự tư vấn tâm lý
                    của bác bác sĩ, tôi đã trở nên tự tin hơn
                    rất nhiều.</p>
                <img src="./root/Image/contactExpert/stars.png" alt="stars">
            </div>
        </div>
        <div class="col-md-4">
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