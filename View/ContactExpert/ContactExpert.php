<?php

include("../View/LayOut/Header/Header.php");
?>


<title>Kết nối chuyên gia</title>
<?php

include("../root/CSS/ContactExpert.css.php");
?>
<div class="container-fluid mt-5">
       <img class="top_image w-100" src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" alt="image">
    <div class="row m-lg-4">
        <h4 class="mb-3">Những chuyên gia top đầu</h3>
        <div class="col-sm-3">
                    <div class="card" style="width: 15rem;" >
                        <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" class="card-img-top" alt="image">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nguyễn Trung Nghĩa</h5>
                            <p class="card-text">Thạc sĩ, bác sĩ chuyên khoa</p>
                            <div class="view">
                            <a asp-controller="ContactExpert" asp-action="Details" class="btn btn-primary">
                                Xem thêm
                            </a>
                            </div>
                        </div>
                    </div>

        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 15rem;">
                    <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" class="card-img-top" alt="image">
                <div class="card-body text-center">
                    <h5 class="card-title">Nguyễn Trung Nghĩa</h5>
                    <p class="card-text">Thạc sĩ, bác sĩ chuyên khoa</p>
                    <div class="view">
                        <a href="#" class="btn">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 15rem;">
                    <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" class="card-img-top" alt="image">
                <div class="card-body text-center">
                    <h5 class="card-title">Nguyễn Trung Nghĩa</h5>
                    <p class="card-text">Thạc sĩ, bác sĩ chuyên khoa</p>
                    <div class="view">
                        <a href="#" class="btn">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 15rem;">
                    <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" class="card-img-top" alt="image">
                <div class="card-body text-center">
                    <h5 class="card-title">Nguyễn Trung Nghĩa</h5>
                    <p class="card-text">Thạc sĩ, bác sĩ chuyên khoa</p>
                    <div class="view">
                        <a href="#" class="btn">Xem thêm</a>
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