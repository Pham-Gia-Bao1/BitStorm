<?php
if (isset($_SESSION['sesscess1'])) {
    session_start();
    showError_booking();
}
include("../View/LayOut/Header/Header.php");
?>
<title>Chi tiết chuyên gia</title>
<?php
include("../root/CSS/ContactExpertDetail.css.php");
?>
<div class="container-fluid mt-2">
    <div class="text-center top_image">
        <img src="./root/Image/contactExpert/topExpertImg.png">
    </div>
    <div class="row mt-5" id="cardExpert">
    </div>
    <div class="row mt-2" id="card">
        <div class="text-center">
            <h4 class="fw-bold">Một số chuyên gia khác có thể bạn quan tâm</h4>
            <div class="row mt-4 card_container">
            </div>
        </div>
    </div>
</div>
<?php
include("../root/JS/ExpertDetail.js.php");
include("../View/LayOut/Footer/Footer.php");
?>