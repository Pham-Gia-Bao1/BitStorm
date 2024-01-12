<body>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 12px !important;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
        }

        td:not(td:last-child) {
            max-width: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }


        th {
            background-color: #f2f2f2;
        }
    </style>
    <title>admin comment</title>
    <div class="main" id="main">

        <table style="margin-top: 12px;">
            <tr id="title_field" style="z-index: 90; padding-left:10px;">
                <th>STT</th>
                <th>Mã Khách hàng</th>
                <th>Mã Chuyên Gia</th>
                <th>Mã lịch</th>
                <th>Ghi chú</th>
                <th>Ngày tạo</th>
                <th>Trạng thái</th>
                <th>Đánh giá</th>
                <th></th>
            </tr>

            <?php $count = 1; foreach ($all_bookings as $booking) :  ?>
                <tr>
                    <td><?php echo $count ?></td>
                    <td><?php echo $booking['user_id'] ?></td>
                    <td><?php echo $booking['expert_id'] ?></td>
                    <td><?php echo $booking['calendar_id'] ?></td>
                    <td><?php echo $booking['note'] ?></td>
                    <td><?php echo $booking['created_at'] ?></td>
                    <td><?php echo $booking['status'] ?></td>
                    <td><?php echo $booking['rating'] ?></td>
                    <td>
                        <a href="Adminbooking?id=<?= $booking['id'] ?>"> <button class="btn btn-primary" data-toggle="modal" data-target="#dataModal">Cập nhật</button></a>
                        <?php if (isset($_GET['id'])) {
                            $booking1 = $bookings->get_one_booking($_GET['id']);
                            // print_r($booking1);
                        }
                        if (isset($_GET['update_success']) && $_GET['update_success'] == 'true') {
                            echo '<div class="alert alert-success" role="alert">Update successful!</div>';
                        }

                        ?>

                        <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="dataModalLabel">Nhập dữ liệu</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="Adminbooking">
                                            <div class="form-group">
                                                <label for="sttInput">Id</label>
                                                <input type="text" class="form-control" id="sttInput" name="sttInput" value="<?php echo $booking1['id'] ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="customerInput">Mã Khách hàng</label>
                                                <input type="text" class="form-control" id="customerInput" name="customerInput" value="<?php echo $booking1['user_id'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="expertInput">Mã Chuyên Gia</label>
                                                <input type="text" class="form-control" id="expertInput" name="expertInput" value="<?php echo $booking1['expert_id'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="scheduleInput">Mã lịch</label>
                                                <input type="text" class="form-control" id="scheduleInput" name="scheduleInput" value="<?php echo $booking1['calendar_id'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="noteInput">Ghi chú</label>
                                                <input type="text" class="form-control" id="noteInput" name="noteInput" value="<?php echo $booking1['note'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="dateInput">Ngày tạo</label>
                                                <input type="text" class="form-control" id="dateInput" name="dateInput" value="<?php echo $booking1['created_at'] ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="statusInput">Trạng thái</label>
                                                <input type="text" class="form-control" id="statusInput" name="statusInput" value="<?php echo $booking1['status'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="ratingInput">Đánh giá</label>
                                                <input type="text" class="form-control" id="ratingInput" name="ratingInput" value="<?php echo $booking1['rating'] ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <script>
                            $(document).ready(function() {
                                var id_booking = getUrlParameter('id');
                                if (id_booking) {
                                    $('#dataModal').modal('show');
                                }
                            });

                            $('#dataModal').on('hidden.bs.modal', function() {
                                window.location.href = 'Adminbooking';
                            });

                            function getUrlParameter(name) {
                                name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
                                var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
                                var results = regex.exec(location.search);
                                return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
                            }
                        </script>
                        <?php     ?>

                    </td>
                </tr>
            <?php $count++; endforeach; ?>
        </table>
    </div>