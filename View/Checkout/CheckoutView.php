<?php
include("../View/LayOut/Header/Header.php");
include("../root/CSS/Checkout.css.php");
?>
<style>
    body {
        background-color: aliceblue;
    }

    .pay_top {
        margin-top: 39px;
        height: 70px;
        padding: 10px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #40A2D8;
        color: #fff !important;
    }

    .userInformation {
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: start;
        background-color: #fff;
        max-width: 350px;
        /* margin-right: 10px; */
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        border-radius: 10px;

    }

    .userInformation1 {
        margin: 0 auto;
        background-color: #fff;
        max-width: 900px;
        padding: 20px !important;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        border-radius: 10px;

    }

    .title_time {
        text-align: center;
        color: #FF6868;
    }


    .dead_line {
    margin-top: 20px;
    max-width: 982px;
    margin-left: 289px;
    background-color: rgba(255, 255, 236, 0.6) !important;
    padding: 30px;
    border-radius: 10px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}
    .deadline{
        width: 70px;
        background-color: #FA7070;
        margin: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        height: 100px;
        color: #fff !important;
    }
</style>
<title>Thanh toán</title>
<div class="container-fluid pay_top p-4">
    <!-- <img src="./root/Image/logo_header.png" alt=""> -->
    <h5>Cổng Thanh Toán BitStorm</h5>

</div>
<div class="container container_checkout">
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-5 userInformation p-4">
                <h2>Thông tin của bạn</h2>
                <p class="fw-bold mt-4">Họ và tên</p>
                <div class="input">
                    <p class="text W-100"><?php echo $user['name'] ?></p>
                </div>
                <p class="fw-bold mt-3">Địa chỉ email</p>
                <div class="input">
                    <p class="text"><?php echo $user['email'] ?></p>
                </div>
                <p class="fw-bold mt-3">Thời gian đặt lịch</p>
                <div class="input">
                    <p class="text">
                        <?php
                        echo $currentDateTime;
                        ?>
                    </p>
                </div>
                <p class="fw-bold mt-3">Nhập ghi chú giành cho chuyên gia (nếu có)</p>
                <div class="input-group inputNote">
                    <textarea class="form-control" aria-label="With textarea" name="note"></textarea>
                </div>
            </div>
            <div class="col-sm-6 userInformation1">
                <h2>Thông tin lịch gặp</h2>
                <div class="row">
                    <div class="col-sm-5">
                        <p class="mt-3 fw-bold">Họ và tên chuyên gia</p>
                    </div>
                    <div class="col-sm-6 mt-3"><?php echo $dataExpert['full_name'] ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <p class="mt-3 fw-bold">Họ và tên chuyên gia</p>
                    </div>
                    <div class="col-sm-6 mt-3"><?php echo $dataExpert['email'] ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <p class="mt-2 fw-bold">Số điện thoại chuyên gia</p>
                    </div>
                    <div class="col-sm-6 mt-2"><?php echo "0" . $dataExpert['phone_number'] ?></div>
                </div>
                <div class="row">

                    <div class="col-sm-5">
                        <p class="mt-1 fw-bold">Thời gian gặp</p>
                    </div>
                    <div class="col-sm-6 mt-1">
                        <?php
                        echo date('h A', strtotime($dataExpert['start_time'])) . ' - ' . date('h A', strtotime($dataExpert['end_time'])) . ", " . $dataExpert['day'];
                        ?>
                    </div>
                </div>
                <p class="fw-bold mt-2">Kinh nghiệm chuyên môn</p>
                <p> <?php echo $dataExpert['experience'] ?> </p>
                <div class="line"></div>
                <h4 class="code mt-2">Click vào nút dưới này để xác lịch gặp</h4>
                <div class="mt-4 ml-2">
                    <button type="submit" class="btn btn-primary w-100">Xác nhận</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="container dead_line bg-light">
    <div class="container title_time">
        <h5>Đơn hàng sẽ hết hạn sau</h5>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="deadline">
            <span class="number" id="days">06</span>
            <span class="text">Ngày</span>
        </div>
        <div class="deadline">
            <span class="number" id="hours">22</span>
            <span class="text">Giờ</span>
        </div>
        <div class="deadline">
            <span class="number" id="minutes">30</span>
            <span class="text">Phút</span>
        </div>
        <div class="deadline">
            <span class="number" id="seconds">45</span>
            <span class="text">Giây</span>
        </div>
    </div>
</div>

<script>
// Hàm bộ đếm ngược
function countdown() {
    const daysElement = document.getElementById('days');
    const hoursElement = document.getElementById('hours');
    const minutesElement = document.getElementById('minutes');
    const secondsElement = document.getElementById('seconds');

    // Lấy thời gian hiện tại
    const currentTime = new Date().getTime();

    // Đặt thời gian kết thúc (đơn vị: milliseconds)
    const endTime = new Date('2024-01-31T00:00:00').getTime(); // Thay đổi ngày kết thúc tại đây

    // Tính thời gian còn lại
    const timeRemaining = endTime - currentTime;

    // Tính số ngày, giờ, phút và giây còn lại
    const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

    // Cập nhật giá trị vào các phần tử HTML
    daysElement.textContent = days.toString().padStart(2, '0');
    hoursElement.textContent = hours.toString().padStart(2, '0');
    minutesElement.textContent = minutes.toString().padStart(2, '0');
    secondsElement.textContent = seconds.toString().padStart(2, '0');
    if (days === 0 && hours === 0 && minutes === 0 && seconds === 0) {
        // Chuyển hướng về trang chủ
        window.location.href = 'home'; // Thay đổi đường dẫn trang chủ tại đây
    }
}

// Gọi hàm bộ đếm ngược mỗi giây
setInterval(countdown, 1000);
</script>
<?php include("../View/LayOut/Footer/Footer.php"); ?>