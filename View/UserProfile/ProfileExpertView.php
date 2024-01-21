<style>
    .img-booking {
        border-bottom-right-radius: 50%;
    }

    .all_card {
        background-color: #EEF5FF;
        height: 600px;
        overflow-y: scroll;
        padding: 30px;
        border-radius: 20px;
    }

    .all_card::-webkit-scrollbar {
        width: 10px;
        background-color: #f0f0f0;
        border-radius: 4px;
    }

    .all_card::-webkit-scrollbar-thumb {
        background-color: white;
        border-radius: 4px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .all_card::-webkit-scrollbar-thumb:hover {
        background-color: #0088cc;
    }

    .all_card::-webkit-scrollbar-thumb:active {
        background-color: #006699;
    }

    .all_card::-webkit-scrollbar-thumb {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .all_card:hover::-webkit-scrollbar-thumb {
        opacity: 1;
    }
</style>
<h1 style="text-align: center;" class="m-5">Lịch đặt</h1>
<div class="all_card d-flex justify-content-center align-items-center flex-wrap" style="width: 80vw; margin: 0 auto">
    <?php foreach ($bookings as $booking) : ?>
        <div class="card mb-3 m-4" style="width: 30vw;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= htmlspecialchars($img); ?>" class="w-100 img-booking" style="height: max-content;" alt="<?= htmlspecialchars($img); ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <p class="card-text">Người Đặt : <?php echo $booking['user_name'] ?> </p>
                        <p class="card-text"><small class="text-muted"> Thời gian : <?php echo htmlspecialchars($posts1->TimePost($booking['create_at_booking'])) ?></small></p>
                        <p class="card-text"><small class="text-muted"> Ngày : <?php echo $booking['create_at_booking']  ?></small></p>
                        <p class="card-text">Chuyên Gia : <?php echo $booking['expert_name'] ?> </p>
                        <p class="card-text"><small class="text-muted">Mã Phòng <?php echo $booking['link_room_booking']  ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>