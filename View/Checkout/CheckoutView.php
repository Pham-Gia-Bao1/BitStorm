<?php
include("../View/LayOut/Header/Header.php");
include("../root/CSS/Checkout.css.php");
?>
<title>Thanh toán</title>

<div class="container container_checkout">
    <div class="row">
        <div class="col-sm-6 userInformation">
            <h2>Thông tin của bạn</h2>
            <p class="fw-bold mt-4">Họ và tên</p>
            <div class="input">
                <p class="text">Lê Thị Bích Quyên</p>
            </div>
            <p class="fw-bold mt-3">Địa chỉ email</p>
            <div class="input">
                <p class="text">lethibichquyen5804@gmail.com</p>
            </div>
            <p class="fw-bold mt-3">Thời gian đặt lịch</p>
            <div class="input">
                <p class="text">12h30 03/01/2024</p>
            </div>
            <p class="fw-bold mt-3">Ghi chú giành cho chuyên gia</p>
            <div class="inputNote">
                <p class="text">Tôi muốn tư vấn về việc trầm cảm học đường.</p>
            </div>
        </div>
        <div class="col-sm-6">
            <h2>Thanh toán lịch hẹn với chuyên gia</h2>
            <p class="fw-bold mt-4">Thông tin đơn đặt lịch của bạn</p>
            <div class="line"></div>
            <div class="row">
                <div class="col-sm-6">
                    <p class="mt-3">Họ và tên chuyên gia</p>
                </div>
                <div class="col-sm-6 mt-3"><?php echo $dataExpert['full_name'] ?></div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p class="mt-1">Thời gian gặp</p>
                </div>
                <div class="col-sm-6 mt-1">
                    <?php
                    echo date('h A', strtotime($dataExpert['start_time'])) . ' - ' . date('h A', strtotime($dataExpert['end_time'])) . ", " . $dataExpert['day'];
                    ?>
                </div>
            </div>
            <div class="line"></div>
            <div class="row">
                <div class="col-sm-6">
                    <p class="fw-bold mt-3">Tổng tiền</p>
                </div>
                <div class="col-sm-6 mt-3"> <?php echo $dataExpert['price'] . " VNĐ" ?> </div>
            </div>
            <h4 class="code mt-2">Click vào nút dưới này để xác thực thông tin</h4>
            <div class="pl-5 mt-4">
                <form action="">
                    <button type="button" class="btn btn-warning">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("../View/LayOut/Footer/Footer.php"); ?>