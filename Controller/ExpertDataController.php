<?php
    $searchTerm = $_GET['fdoctor'];
    $resultOfSearchExperts = $ExpertModel->searchExperts($searchTerm,$currentDate);
    $dataOfSearchExperts = [];
    foreach ($resultOfSearchExperts as $experts) {
        $dataOfSearchExperts[] = $experts;
    }
    echo json_encode($dataOfSearchExperts);