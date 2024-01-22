<?php
include("../View/LayOut/Header/Header.php");
include("../root/CSS/Checkout.css.php");
?>
<title>Thanh toán</title>
<div class="container-fluid pay_top p-4">
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
                    <img src="https://i.stack.imgur.com/LKaXU.png" alt="">
                </div>
                <p class="fw-bold mt-3">Địa chỉ email</p>
                <div class="input">
                    <p class="text"><?php echo $user['email'] ?></p>
                    <img src="https://i.stack.imgur.com/LKaXU.png" alt="">
                </div>
                <p class="fw-bold mt-3">Thời gian đặt lịch</p>
                <div class="input">
                    <p class="text"><?php echo $currentDateTime; ?></p>
                    <img src="https://i.stack.imgur.com/LKaXU.png" alt="">
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
                    <div class="col-sm-6 mt-3" style="overflow: hidden;"><?php echo $dataExpert['email'] ?></div>
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
                    <button id="submit_buy" type="submit" class="btn btn-primary w-100 rounded-pill p-3 d-flex justify-content-center align-items-center">Xác nhận
                        <?php if (isset($_COOKIE['susscess'])) { ?>
                            <span class="loader"></span>
                        <?php } ?>
                    </button>
                    <script>
                        const loader = document.querySelector(".loader");
                        loader.style.display = "none";
                        document.getElementById('submit_buy').addEventListener("click", function() {
                            loader.style.display = "block";
                        })
                    </script>
                    <style>
                        .loader {
                            width: 48px;
                            height: 48px;
                            display: inline-block;
                            position: relative;
                        }

                        .loader::after,
                        .loader::before {
                            content: '';
                            box-sizing: border-box;
                            width: 48px;
                            height: 48px;
                            border-radius: 50%;
                            background: #FFF;
                            position: absolute;
                            left: 0;
                            top: 0;
                            animation: animloader 2s linear infinite;
                        }

                        .loader::after {
                            animation-delay: 1s;
                        }

                        @keyframes animloader {
                            0% {
                                transform: scale(0);
                                opacity: 1;
                            }

                            100% {
                                transform: scale(1);
                                opacity: 0;
                            }
                        }
                    </style>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="container dead_line bg-light">
    <div class="container title_time">
        <h5>Thời gian đặt lịch sẽ hết hạn sau</h5>
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
    function countdown() {
        const daysElement = document.getElementById('days');
        const hoursElement = document.getElementById('hours');
        const minutesElement = document.getElementById('minutes');
        const secondsElement = document.getElementById('seconds');
        const currentTime = new Date().getTime();
        const endTime = new Date('2024-01-31T00:00:00').getTime(); // Thay đổi ngày kết thúc tại đây
        const timeRemaining = endTime - currentTime;
        const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
        daysElement.textContent = days.toString().padStart(2, '0');
        hoursElement.textContent = hours.toString().padStart(2, '0');
        minutesElement.textContent = minutes.toString().padStart(2, '0');
        secondsElement.textContent = seconds.toString().padStart(2, '0');
        if (days === 0 && hours === 0 && minutes === 0 && seconds === 0) {
            window.location.href = 'home'; // Thay đổi đường dẫn trang chủ tại đây
        }
    }
    setInterval(countdown, 1000);
</script>
<?php include("../View/LayOut/Footer/Footer.php"); ?>