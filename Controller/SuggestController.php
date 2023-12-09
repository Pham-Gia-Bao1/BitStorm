<?php
    include_once("../Model/Blog.php");
    $blog = new Blog();
    // Lấy giá trị tìm kiếm từ yêu cầu Ajax
    $searchTerm = $_GET['search'];
    // Thực hiện truy vấn tìm kiếm và tạo dữ liệu gợi ý
    $titles = $blog->getVideoTitlesBySearchTerm($searchTerm);
    $suggestions = []; // Mảng chứa các gợi ý tìm kiếm
    // Lặp qua các tiêu đề và thêm vào mảng gợi ý
    foreach ($titles as $title) {
        $suggestions[] = $title;
    }
    // Trả về dữ liệu gợi ý dưới dạng JSON
    echo json_encode($suggestions);
