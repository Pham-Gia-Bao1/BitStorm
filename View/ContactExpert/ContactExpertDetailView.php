<?php
include("../View/LayOut/Header/Header.php");
?>
<title>Chi tiết chuyên gia</title>
<?php
include("../root/CSS/ContactExpertDetail.css.php");
?>
<div class="container-fluid mt-2">
    <div>
        <img class="top_image" src="./root/Image/contactExpert/top_img.jpg">
    </div>
    <div class="row mt-5">
        <div class="col-sm-4 doctor_image p-lg-2">
            <img src="./root/Image/contactExpert/doctor.jpg" alt="image">
        </div>
        <div class="col-sm-5 container_content">
            <p id="text">Doctor</p>
            <h2>Chuyên gia tâm lý Trần Anh Vũ</h2>
            <p>Thạc sĩ Anh Vũ đã có hơn 9 năm kinh nghiệm trong lĩnh vực tham vấn và điều trị tâm lý, hơn 2000 giờ tiếp xúc
                lâm sàng
                được giám sát bởi các nhà trị liệu kỳ cựu đến từ Mỹ, Úc v.v. Thạc sĩ Anh Vũ hiện đang công tác tại Công ty
                TNHH Tham Vấn
                Tâm lý Giang Vũ, là giảng viên bộ môn Tâm lý ứng dụng trường Đại học Hoa Sen.
            </p>
            <p class="fw-bolder rating">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
            <div class="row">
                <div class="col-sm-3 detailTime">
                    10-11 AM
                </div>
                <div class="col-sm-3 detailTime">
                    26/12/2023
                </div>
                <div class="col-sm-4 feeDetail">
                    100000 VNĐ/lần
                </div>
            </div>
            <div class="row mt-3 d-flex justify-content-center align-content-center">
                <div class="col-sm-6 checkout mt-2">
                    <a href="" id="checkoutBtn" class="mr-1">Đi đến trang thanh toán </a> <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <h4 class="fw-bold">Thời gian khác chuyên gia có thể hỗ trợ</h4>
            <div class="row mt-4 card_container">
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
        </div>
    </div>
</div>
<?php
include("../View/LayOut/Footer/Footer.php");
?>