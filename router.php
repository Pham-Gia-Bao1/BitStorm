<?php
// router.php
include_once("../Model/UserProfileModel.php");
$userprofile = new UserProfile();
$role_id = $userprofile->get_role_id();


// Lấy đường dẫn URL sau localhost
$requestUri = $_SERVER['REQUEST_URI']; // BitStorm/adminUser
$baseUrl = 'BitStorm/'; // Đường dẫn gốc của ứng dụng

// Xóa đường dẫn gốc khỏi URL để chỉ lấy phần đường dẫn tương đối
$relativePath = str_replace($baseUrl, '', $requestUri); // /adminUser

// Tách đường dẫn tương đối thành các phần dựa trên dấu "/"
$parts = explode('/', $relativePath); // [adminUser]

// Kiểm tra xem đường dẫn tương đối có rỗng hay không
if ($relativePath === '') {
    // Gọi controller home
    require_once("/BitStorm/Controller/HomeController.php");
    $controller = new HomeController();
    $controller->index();
    exit();
}

// Lấy tên controller
//AdminUserController
$controllerName = ucfirst($parts[0]) . 'Controller'; // Sửa lấy phần tử đầu tiên của $parts
// Controller/AdminUserController.php
$controllerPath = 'Controller/' . $controllerName . '.php';

// Kiểm tra xem tệp tin controller có tồn tại không
if (file_exists($controllerPath)) {
    // Gọi controller
    if ($role_id = 2 && strpos($controllerName, 'Admin') === 0) {
        // Nếu tên controller có chứa từ "Admin" đứng đầu, chuyển hướng hoặc hiển thị thông báo lỗi
        header("HTTP/1.0 403 Forbidden");
        echo "Access denied";
        exit();
    } else{
        require_once $controllerPath;

    }

    // Tạo đối tượng controller
    $controller = new $controllerName();

    // Kiểm tra xem có phương thức tương ứng không
    if (isset($parts[1])) { // Sửa kiểm tra phần tử thứ hai của $parts
        $methodName = $parts[1]; // Sửa lấy phần tử thứ hai của $parts
        if (method_exists($controller, $methodName)) {
            // Gọi phương thức trong controller
            $controller->$methodName();
            exit();
        } else {
            // Hiển thị thông báo lỗi phương thức không tồn tại
            header("HTTP/1.0 404 Not Found");
            echo "Method not found";
            exit();
        }
    } else {
        // Gọi phương thức mặc định (ví dụ: index()) trong controller
        $controller->index();
        exit();
    }
}


header("Location: home");

echo "Page not found";
