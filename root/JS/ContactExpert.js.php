<script>
    var data = <?php echo json_encode($data); ?>;
    var viewAll = document.getElementById('viewAll');
    var boxCard = document.getElementById('boxCard');
    viewAll.addEventListener('click', function() {
            let dataExperts = data.slice(0);
        var html = '';
        boxCard.style.height = 'auto';
        viewAll.style.display = 'none';
        dataExperts.forEach(expert => {
                var startTimeParts = expert.start_time.split(':');
            var endTimeParts = expert.end_time.split(':');
            var startTime = new Date();
            startTime.setHours(parseInt(startTimeParts[0], 10));
            startTime.setMinutes(parseInt(startTimeParts[1], 10));
            var endTime = new Date();
            endTime.setHours(parseInt(endTimeParts[0], 10));
            endTime.setMinutes(parseInt(endTimeParts[1], 10));
            var options = {
                    hour: '2-digit',
            };
            var formattedStartTime = startTime.toLocaleTimeString('en-US', options);
            var formattedEndTime = endTime.toLocaleTimeString('en-US', options);
            html += `
            <div class="col-sm-3 mt-4">
                <div class="card mb-1" style="width: 17rem;">
                    <div class="text-center">
                        <img class="img_card" src="${expert.profile_picture}" class="card-img-top" alt="image">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="fw-bold">${expert.full_name}</h5>
                        <p>${expert.specialization}</p>
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
                                    <a asp-controller="ContactExpert" asp-action="Details" href="ContactExpertDetail?id=${expert.id}">
                                        Xem thêm
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
        });
        boxCard.innerHTML = html;
    });
</script>