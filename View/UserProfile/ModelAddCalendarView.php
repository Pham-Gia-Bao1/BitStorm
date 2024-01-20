<style>
  .btn_add {
    margin-top: 30px;
  }
</style>
<div data-bs-toggle="modal" data-bs-target="#addmodal" id="add_calendar" class="all_card d-flex justify-content-center p-3 align-items-center flex-wrap" style="width: 83vw; margin: 0 auto">
  <button class="btn btn-primary btn_add">Thêm Lịch khám</button>
</div>

<!-- Modal -->
<div class="modal fade" id="addmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm lịch khám</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="userprofile" method="post">
          <input type="hidden" value="Hoạt động" name="status">
          <div class="mb-3">
            <label for="day" class="form-label">Ngày</label>
            <input type="date" class="form-control" id="day" name="day" required>
          </div>
          <div class="mb-3">
            <label for="start_time" class="form-label">Thời gian bắt đầu</label>
            <input type="time" class="form-control" id="start_time" name="start_time" required>
          </div>
          <div class="mb-3">
            <label for="end_time" class="form-label">Thời gian kết thúc</label>
            <input type="time" class="form-control" id="end_time" name="end_time" required>
          </div>
          <div class="mb-3">
            <input type="hidden" class="form-control" id="price" name="price" value="0" required>
          </div>
          <div class="mb-3">
            <label for="describer" class="form-label">Mô tả</label>
            <textarea class="form-control" id="describer" name="describer" required></textarea>
          </div>
          <div class="mb-3">
            <input type="hidden" class="form-control" id="expert_id" name="expert_id" readonly value="<?php echo $expert_id;  ?>">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Thêm lịch</button>
      </div>
      </form>
    </div>
  </div>
</div>


<h1 style="text-align: center;" class="m-5">Lịch đã thêm</h1>
<!-- card -->
<div class="all_card d-flex justify-content-center align-items-center flex-wrap" style="width: 80vw; margin: 0 auto">
  <?php
  foreach ($calendars as $calendar) : ?>
    <div class="card mb-3 m-4" style="width: 30vw;">
      <div class="row g-0 box_top_card">
        <div class="col-md-4">
          <img src="<?= htmlspecialchars($img); ?>" class="w-100 img-booking" style="height: max-content;" alt="<?= htmlspecialchars($img); ?>">
        </div>
        <div class="col-md-8">
          <div class="card-body d-flex justify-content-center align-items-center flex-column">
            <p class="card-text">Người thêm : Bạn</p>
            <p class="card-text">Ngày thêm : <?php echo $calendar['day'] ?> </p>
            <p class="card-text"><small class="text-muted">bắt đầu từ: <?php echo htmlspecialchars($calendar['start_time']) ?></small></p>
            <p class="card-text"><small class="text-muted">kết thúc vào: <?php echo htmlspecialchars($calendar['end_time']) ?></small></p>
            <p class="card-text"><small class="text-muted"> Trạng thái : <?php echo $calendar['status']  ?></small></p>

          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>
<!-- lich đã book -->
<h1 style="text-align: center;" class="m-5">Lịch đã được đặt</h1>
<!-- card -->
<div class="all_card d-flex justify-content-center align-items-center flex-wrap" style="width: 80vw; margin: 0 auto">
  <?php
  foreach ($old_bookings as $old_booking) : ?>
    <div class="card mb-3 m-4" style="width: 30vw; background-color : #FFF5E0">
      <div class="row g-0 box_top_card">
        <div class="col-md-4">
          <img src="<?= htmlspecialchars($img); ?>" class="w-100 img-booking" style="height: max-content;" alt="<?= htmlspecialchars($img); ?>">
        </div>
        <div class="col-md-8">
          <div class="card-body d-flex justify-content-center align-items-center flex-column">

            <p class="card-text">Người đặt : <?php echo $old_booking['name'] ?> </p>

            <p class="card-text"><small class="text-muted">bắt đầu từ: <?php echo htmlspecialchars($old_booking['create_at_booking']) ?></small></p>
            <p class="card-text"><small class="text-muted"> Trạng thái : <?php echo $old_booking['status']  ?></small></p>
            <p class="card-text"><small class="text-muted">Vấn đề: <?php echo $old_booking['note']  ?></small></p>
            <p class="card-text"><small class="text-muted">Mã Phòng <?php echo $old_booking['link_room_booking']  ?></small></p>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</div>