<?php
    include_once("../Model/BlogModel.php");
    $blog = new Blog();
    $searchTerm = $_GET['search'];
    $titles = $blog->getVideoTitlesBySearchTerm($searchTerm);
    $suggestions = []; // Mảng chứa các gợi ý tìm kiếm
    foreach ($titles as $title) {
        $suggestions[] = $title;
    }
    echo json_encode($suggestions);
