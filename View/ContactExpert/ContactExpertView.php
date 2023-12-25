<?php

include("../View/LayOut/Header/Header.php");
?>


<title>Kết nối chuyên gia</title>
<?php
include("../root/CSS/ContactExpert.css.php");
?>
<div class="container-fluid mt-5">
    <div>
        <img class="top_image w-90 mb-5" src="https://hellohomedoctor.com.au/wp-content/uploads/2018/08/THE-MOST-COMMON-REASON-PATIENTS-CALL-134100-IN-THE-AFTER-HOURS..png">
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
                <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" class="card-img-top" alt="image">
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
                                <a asp-controller="ContactExpert" asp-action="Details">
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
                <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" class="card-img-top" alt="image">
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
                                <a asp-controller="ContactExpert" asp-action="Details">
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
                <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" class="card-img-top" alt="image">
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
                                <a asp-controller="ContactExpert" asp-action="Details">
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
                <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" class="card-img-top" alt="image">
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
                                <a asp-controller="ContactExpert" asp-action="Details">
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
            Việc mang lại trải nghiệm tốt giúp họ vượt qua giai đoạn căng thẳng là sứ mệnh của chúng tôi
        </p>
    </div>
    <div class="row mt-5 pl-5 pr-5">
        <div class="col-md-4">
            <div class="testimonial-card">
                <img src="../../root/Image/contactExpert/client1.png" alt="Client 1" class="img-fluid">
                <p class="client-quote">Trước đây tôi không thể mở lòng với bất kì ai, nhưng từ khi được sự tư vấn tâm lý
                    của bác Anh, tôi đã trở nên tự tin hơn
                    rất nhiều.</p>
                <img src="../../root/Image/contactExpert/stars.png" alt="stars">
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonial-card">
                <img src="../../root/Image/contactExpert/client1.png" alt="Client 1" class="img-fluid">
                <p class="client-quote">Trước đây tôi không thể mở lòng với bất kì ai, nhưng từ khi được sự tư vấn tâm lý
                    của bác Anh, tôi đã trở nên tự tin hơn
                    rất nhiều.</p>
                <img src="../../root/Image/contactExpert/stars.png" alt="stars">
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonial-card">
                <img src="../../root/Image/contactExpert/client1.png" alt="Client 1" class="img-fluid">
                <p class="client-quote">Trước đây tôi không thể mở lòng với bất kì ai, nhưng từ khi được sự tư vấn tâm lý
                    của bác Anh, tôi đã trở nên tự tin hơn
                    rất nhiều.</p>
                <img src="../../root/Image/contactExpert/stars.png" alt="stars">
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