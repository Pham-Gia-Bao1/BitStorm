<?php

include("../View/Admin/Layout/SideBar.view.php");
include("../root/CSS/Admin/AdminComment.css.php");
include_once("../root/CSS/Admin/Homepage.css.php");
include_once("../root/CSS/Admin/SideBar.css.php");
?>

<body>

    <div class="main">
        <div class="body-main">
           
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card border-3 border-primary">
                    <div class="cardTop">
                        <div class="cardName">User</div>
                        <div class="iconBx">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                    <div>
                        <div class="numbers"><?php echo($countUser['COUNT(*)']);?></div>
                    </div>

                </div>

                <div class="card border-3 border-success">
                    <div class="cardTop ">
                        <div class="cardName">Bác sĩ</div>
                        <div class="iconBx">
                            <i class="fa-solid fa-user-doctor"></i>
                        </div>
                    </div>
                    <div>
                        <div class="numbers"><?php echo($countExpert['COUNT(*)'])?></div>
                        
                    </div>

                </div>

                <div class="card border-3 border-danger">
                    <div class="cardTop ">
                        <div class="cardName">Lịch đã đặt</div>
                        <div class="iconBx">
                            <i class="fa-regular fa-calendar-days "></i>
                        </div>
                    </div>
                    <div>   
                        <div class="numbers"><?php echo ($countBooking['COUNT(*)'])?></div>
                        
                    </div>

                </div>

                <div class="card border-3 border-warning">
                    <div class="cardTop">
                        <div class="cardName">Bài đăng</div>
                        <div class="iconBx">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                    </div>
                    <div>
                        <div class="numbers"><?php echo ($countPost['COUNT(*)'])?></div>
                        
                    </div>

                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <!-- ================= New Customers ================ -->
                <div class="chartUseAndExperts">
                    <div class="cardHeader" id="chartContainer">
                    </div>
                </div>
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Lịch đã đặt gần đây</h2>
                        <!-- <a href="#" class="btn">View All</a> -->
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Tên</td>
                                <td>Bác sĩ</td>
                                <td>Ngày</td>
                                <td>Giờ bắt đầu</td>
                                <td>Giờ kết thúc</td>
                            </tr>
                        </thead>

                        <tbody class="scroll-container">
                            <?php 
                            foreach($bookings as $booking):?>
                            <tr>
                                <td><?php echo $booking['userName'];?></td>
                                <td><?php echo $booking['expertName'];?></td>
                                <td><?php echo $booking['calendarDay'];?></td>
                                <td><span class="status inProgress"><?php echo $booking['start_time'];?></span></td>
                                <td><span class="status return "><?php echo $booking['end_time'];?></span></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
 
$dataPoints = array( 
	array("y" => $countUser['COUNT(*)'], "label" => "Users" ),
	array("y" => $countExpert['COUNT(*)'], "label" => "Experts" ),
);
 
?>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Thống kê số lượng người dùng và bác sĩ"
	},
	axisY: {
		title: "quanity people"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## người",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<?php
?>