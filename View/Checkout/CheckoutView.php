<?php
include("../View/LayOut/Header/Header.php");
include("../root/CSS/Checkout.css.php");
?>
<title>Thanh toán</title>
<div class="container container_checkout">
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-5 userInformation">
                <h2>Thông tin của bạn</h2>
                <p class="fw-bold mt-4">Họ và tên</p>
                <div class="input">
                    <p class="text"><?php echo $user['name'] ?></p>
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
            <div class="col-sm-6">
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
                    <div class="col-sm-6 mt-2"><?php echo "0". $dataExpert['phone_number'] ?></div>
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
                    <button type="submit" class="btn btn-warning">Xác nhận</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php include("../View/LayOut/Footer/Footer.php"); ?>