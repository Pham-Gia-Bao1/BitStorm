
<style>
    .btn_add{
        margin-top: 30px;
    }
</style>
<div data-bs-toggle="modal" data-bs-target="#addmodal" id="add_calendar" class="all_card d-flex justify-content-start align-items-center flex-wrap" style="width: 83vw; margin: 0 auto">
    <button class="btn btn-primary btn_add">Thêm Lịch khám</button>
</div>
<!-- Modal -->
<div class="modal fade" id="addmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Calendar Entry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="userprofile" method="post">
            <div class="mb-3">
              <label for="day" class="form-label">Day:</label>
              <input type="date" class="form-control" id="day" name="day" required>
            </div>
            <div class="mb-3">
              <label for="start_time" class="form-label">Start Time:</label>
              <input type="time" class="form-control" id="start_time" name="start_time" required>
            </div>
            <div class="mb-3">
              <label for="end_time" class="form-label">End Time:</label>
              <input type="time" class="form-control" id="end_time" name="end_time" required>
            </div>
            <div class="mb-3">
              <input type="hidden" class="form-control" id="price" name="price" value="0"  required>
            </div>
            <div class="mb-3">
              <label for="describer" class="form-label">Describer:</label>
              <textarea class="form-control" id="describer" name="describer" required></textarea>
            </div>
            <div class="mb-3">
              <input type="hidden" class="form-control" id="expert_id" name="expert_id"  readonly value="<?php echo $id_user;  ?>">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
    </div>
  </div>
</div>
