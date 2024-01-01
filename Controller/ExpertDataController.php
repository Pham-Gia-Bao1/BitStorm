<?php
    include_once("../Model/ContactExpertModel.php");
    $ExpertModel = new Expert();
    // Lấy ngày hiện tại
    $currentDate = date('Y-m-d'); 
    $Data = $ExpertModel->getExpertsWithCalendar($currentDate);
    $dataExperts = [];
    foreach ($Data as $expert) {
        $dataExperts[] = $expert;
    }
    echo json_encode($dataExperts);

    // Lấy giá trị tìm kiếm từ yêu cầu Ajax
    $searchTerm = $_GET['fdoctor'];
    $resultOfSearchExperts = $ExpertModel->searchExperts($searchTerm,$currentDate);
    $dataOfSearchExperts = [];
    foreach ($resultOfSearchExperts as $experts) {
        $dataOfSearchExperts[] = $experts;
    }
    echo json_encode($dataOfSearchExperts);

    //Khi nhấn nút viewAll
    if(isset($_GET("ViewAll"))){
        $data = $ExpertModel->getExpertsWithCalendar($currentDate);
        $dataExpert = [];
        foreach ($data as $expert) {
            $dataExpert[] = $expert;
        }
        echo json_encode($dataExpert);
    }
?>