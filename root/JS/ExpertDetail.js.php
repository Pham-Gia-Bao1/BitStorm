<script>
    let expert = <?php echo json_encode($data); ?>;
    let experts = <?php echo json_encode($suggestExperts); ?>;
    let cardExperts = document.getElementById('cardExpert');
    let resultOfSuggestExperts = document.querySelector('.card_container');
    var startTimeParts = expert.start_time.split(':');
    var endTimeParts = expert.end_time.split(':');

    var startTime = new Date();
    startTime.setHours(parseInt(startTimeParts[0], 10));
    startTime.setMinutes(parseInt(startTimeParts[1], 10));

    var endTime = new Date();
    endTime.setHours(parseInt(endTimeParts[0], 10));
    endTime.setMinutes(parseInt(endTimeParts[1], 10));

    // Định dạng thời gian
    var options = {
        hour: '2-digit',
    };
    var formattedStartTime = startTime.toLocaleTimeString('en-US', options);
    var formattedEndTime = endTime.toLocaleTimeString('en-US', options);
    renderDetailExpert();
    suggestExperts();

    function renderDetailExpert() {

        cardExperts.innerHTML = `
            <div class="col-sm-4 doctor_image p-lg-2">
                <img src="${expert.profile_picture}" alt="image">
            </div>
            <div class="col-sm-5 container_content">
                <h2>${expert.specialization} ${expert.full_name}</h2>
                <p>${expert.experience} </p>
                <?php $rate = $data['count_rating'] ?>
                <p class="fw-bolder rating">
                     ${generateStarRating(expert.count_rating)}
                </p>
                <div class="row">
                    <div class="col-sm-3 detailTime">
                         ${formattedStartTime} - ${formattedEndTime}
                    </div>
                    <div class="col-sm-3 detailTime">
                        ${expert.day}
                    </div>

                </div>
                <div class="row mt-5 d-flex justify-content-center align-content-center">
                <div class="col-sm-6 checkout mt-2">
                    <form action="" method="post">
                        <button type="submit" class="checkoutButton" name="userID">
                            <a id="checkoutBtn" class="mr-1" <?php if (isset($_COOKIE[$cookie_name])) : ?> href="Checkout?expert_id=${expert.id}" <?php endif ?> >Đi đến trang thanh toán </a> <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
                </div>
            </div>
        `;

        function generateStarRating(countRating) {
            let stars = '';
            for (let i = 0; i < countRating; i++) {
                stars += ' &#9733;';
            }
            return stars;

        }
    }

    function suggestExperts() {
        let count = 0;
        experts.forEach((experts) => {
            if (count < 4 && experts.id !== expert.id) {
                resultOfSuggestExperts.innerHTML += `
                <div class="col-sm-3 mt-4">
                    <div class="card mb-1" style="width: 17rem;">
                        <div class="text-center">
                            <img class="img_card" src="${experts.profile_picture}" class="card-img-top" alt="image">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="fw-bold">${experts.full_name}</h5>
                            <p>${experts.specialization}</p>
                            <div class="row mb-3">
                                <div class="col time d-flex">
                                     <span class="time_icon">
                                        <i class="fas fa-clock aclock"> 
                                            <?php echo " " ?> ${formattedStartTime} - ${formattedEndTime}
                                        </i>
                                </span>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-sm-1 pl-2 ml-3 mt-2 actives"></div>
                                <div class="col-sm-10">
                                    <button class="viewMorebtn">
                                        <a asp-controller="ContactExpert" asp-action="Details" href="ContactExpertDetail?id=${experts.id}">
                                            Xem thêm
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
                count++;
            }
        });
    }
</script>