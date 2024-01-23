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
include("../root/CSS/ContactExpert.css.php");
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
            <div class="row boxCard bg-light" id="boxCard1">

            <?php   foreach ($suggestExperts as $expert) :  ?>
                <div class="col-sm-3 mt-4">
                    <div class="card mb-1" style="width: 17rem;">
                        <div class="text-center">
                            <img class="img_card" src="<?php echo $expert['profile_picture'] ?>" class="card-img-top" alt="image">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="fw-bold"><?php echo $expert['full_name'] ?></h5>
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
                </div>
                <?php endforeach; ?>
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
                            document.getElementById('boxCard1').style.height = "auto";
                            document.getElementById("viewAll").style.display = "none";
                            document.getElementById("viewLess").style.display = "block";
                        });
                        document.getElementById('viewLess').addEventListener('click', function() {
                            document.getElementById('boxCard1').style.height = "480px";
                            document.getElementById("viewAll").style.display = "block";
                            document.getElementById("viewLess").style.display = "none";
                        });
                    </script>
                </div>
        </div>
    </div>
</div>
<?php
include("../root/JS/ExpertDetail.js.php");
include("../View/LayOut/Footer/Footer.php");
?>